<?php

namespace Modules\Setting\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Setting\Repositories\UtilityRepositoryInterface;

class UtilityController extends Controller
{
    public $utilitiesRepository;

    public function __construct(UtilityRepositoryInterface $utilitiesRepository)
    {
        $this->utilitiesRepository = $utilitiesRepository;
    }

    public function index(Request $request)
    {
        if ($request->type) {
            switch ($request->type) {
                case 'cache':
                    $this->utilitiesRepository->cacheClear();
                    $msg = trans('setting.Cache Cleared');
                    break;
                case 'log':
                    $this->utilitiesRepository->logClear();
                    $msg = trans('setting.Log Cleared');
                    break;

//                    'APP_DEBUG' => env('APP_DEBUG') ? "false" : "true"
                default:
                    $msg = '';
            }
            return redirect()->route('utilities.index')
                ->with('success', $msg);
        }
        return view('setting::utitlity.edit');
    }


}
