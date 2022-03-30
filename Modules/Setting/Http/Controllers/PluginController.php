<?php

namespace Modules\Setting\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PluginController extends Controller
{

    public function index()
    {
        return view('setting::plugins.index');
    }

    public function store(Request $request)
    {
        $requests = $request->except(['_token']);
        foreach ($requests as $key => $value) {
            updateSetting($key, $value);
        }
        return redirect()->route('plugins.index')
            ->with('success', trans('common.Updated successfully'));
    }


}
