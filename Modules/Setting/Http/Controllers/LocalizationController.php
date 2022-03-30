<?php

namespace Modules\Setting\Http\Controllers;

use App\Traits\LangFiles;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Modules\Setting\Models\Language;
use Modules\Setting\Repositories\LanguageRepositoryInterface;


class LocalizationController extends Controller
{
    use LangFiles;

    protected $languageRepository;

    public function __construct(LanguageRepositoryInterface $languageRepository)
    {
        $this->languageRepository = $languageRepository;
    }

    public function index($code)
    {
        return view('setting::translates.index', [
            "language" => $this->languageRepository->findByCode($code),
            "languagePaths" => $this->getAllLangFiles($code)
        ]);
    }

    public function get_translate_file(Request $request)
    {
        try {
            if (empty($request->file_name)) {
                return null;
            }
            $language = $this->languageRepository->findById($request->id);

            $file_name = $request->file_name;


            if (file_exists($file_name)) {

                $default_languages = str_replace('/' . $language->code . '/', "/en/", $file_name);
                return view('setting::translates.editor', [
                    "languages" => include "{$file_name}",
                    "default_languages" => include "{$default_languages}",
                    "language" => $language,
                    "translatable_file_name" => $request->file_name
                ]);
            } else {
                if (!File::isDirectory(pathinfo($file_name)['dirname'])) {
                    File::makeDirectory(pathinfo($file_name)['dirname']);
                }
                File::copy(str_replace('/' . $language->code . '/', "/en/", $file_name), $file_name);
            }


            $file1 = str_replace('/' . $language->code . '/', "/en/", $file_name);
            $file2 = $file_name;
            $no_of_lines_file_1 = count(file($file1));
            $no_of_lines_file_2 = count(file($file2));

            if ($no_of_lines_file_1 > $no_of_lines_file_2) {
                $file_contents = file_get_contents($file2);
                $file_contents = str_replace("\n];", " ", $file_contents);
                file_put_contents($file2, $file_contents);
                $i = $no_of_lines_file_2 - 1;
                $lines = file($file1);
                foreach ($lines as $line) {
                    $fp = fopen($file2, 'a');
                    if ($i < $no_of_lines_file_1) {
                        fwrite($fp, $lines[$i]);
                        $i++;
                    }
                    fclose($fp);
                }
            }


            return view('setting::translates.editor', [
                "languages" => include "{$file_name}",
                "default_languages" => include "{$file_name}",
                "language" => $language,
                "translatable_file_name" => $request->file_name
            ]);
        } catch (Exception $e) {
            dd($e->getMessage());
        }

    }


    public function key_value_store(Request $request)
    {
        try {
            $file_name = $request->translatable_file_name;

            if (!File::isDirectory(pathinfo($file_name)['dirname'])) {
                File::makeDirectory(pathinfo($file_name)['dirname']);
            }

            if (file_exists($file_name)) {
                file_put_contents($file_name, '');
            }

            file_put_contents($file_name, '<?php return ' . var_export($request->key, true) . ';');

            $lang = basename($file_name, '.php');

            return back()->with(['lang' => $lang, 'success' => 'Successfully changed language']);

        } catch (Exception $e) {
        }
    }

    public function changeLanguage($code)
    {
        $language = Language::where('status', 1)->where('code', $code)->first();
        if ($language) {
            if (Auth::check()) {
                $user = Auth::user();
                $user->language_code = $language->code;
                $user->language_name = $language->name;
                $user->language_rtl = $language->rtl;
                $user->save();
                return Redirect::back()->with('success', trans('common.Successfully changed language'));
            } else {
                Session::put('language_code', $language->code);
                Session::put('language_name', $language->name);
                Session::put('language_rtl', $language->rtl);
            }
        }
        return Redirect::back();
    }
}
