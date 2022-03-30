<?php

namespace Modules\Setting\Repositories\Eloquent;


use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Modules\Setting\Models\VersionHistory;
use Modules\Setting\Repositories\UpdateRepositoryInterface;

class UpdateRepository implements UpdateRepositoryInterface
{
    public function getAllUpdateVersion(): Collection
    {
        return VersionHistory::latest()->get();
    }

    public function updateStore($data): array
    {
        $data['status'] = 'error';
        $data['msg'] = 'The update file is corrupt. Use Original Zip File';

        $uploadFilePath = $data['file']->store('update');
        $zip = new ZipArchive;
        $res = $zip->open(storage_path('app/' . $uploadFilePath));

        if ($res === true) {
            $zip->extractTo(storage_path('app/temp'));
            $zip->close();
        } else {
            $data['msg'] = 'Error! Could not open File';
            return $data;
        }

        $config = @file_get_contents(storage_path('app/temp/config.json'), true);


        if ($config === false) {
            return $data;
        }

        $configJson = json_decode($config, true);


        if (empty($configJson) || empty($configJson['version']) || empty($configJson['release_date'] || empty($configJson['min']))) {
            return $data;
        }


        $src = storage_path('app/temp');
        $dst = base_path('/');

        $this->recurse_copy($src, $dst);

        if (isset($configJson['migrations']) & !empty($configJson['migrations'])) {
            foreach ($configJson['migrations'] as $migration) {
                Artisan::call('migrate',
                    array(
                        '--path' => $migration,
                        '--force' => true));
            }
        }


        updateSetting('version', $configJson['version']);
        updateSetting('last_updated_date', now());


        $newVersion = VersionHistory::where('version', $configJson['version'])->first();
        if (!$newVersion) {
            $newVersion = new VersionHistory();
        }
        $newVersion->version = $configJson['version'];
        $newVersion->min = $configJson['min'];
        $newVersion->release_date = $configJson['release_date'];
        $newVersion->notes = json_encode($configJson['notes']);
        $newVersion->created_at = now();
        $newVersion->updated_at = now();
        $newVersion->save();
        Storage::put('.version', $configJson['version']);

        $this->delete_directory($src);
        $this->delete_directory($uploadFilePath);

        $data['status'] = 'success';
        $data['msg'] = 'Update Successfully';
        return $data;
    }


    function recurse_copy($src, $dst)
    {
        try {
            $dir = opendir($src);
            @mkdir($dst);
            while (false !== ($file = readdir($dir))) {
                if (($file != '.') && ($file != '..')) {
                    if (is_dir($src . '/' . $file)) {
                        $this->recurse_copy($src . '/' . $file, $dst . '/' . $file);
                    } else {
                        if ($file != 'config.json') {
                            copy($src . '/' . $file, $dst . '/' . $file);
                        }
                    }
                }
            }
            closedir($dir);
        } catch (Exception $e) {
            Log::alert($e->getMessage());
        }
    }

    function delete_directory($dirname)
    {
        try {
            if (is_dir($dirname)) {
                $dir_handle = opendir($dirname);
                if (!$dir_handle)
                    return false;
                while ($file = readdir($dir_handle)) {
                    if ($file != "." && $file != "..") {
                        if (!is_dir($dirname . "/" . $file))
                            unlink($dirname . "/" . $file);
                        else
                            $this->delete_directory($dirname . '/' . $file);
                    }
                }
                closedir($dir_handle);
                rmdir($dirname);
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }

    }


}
