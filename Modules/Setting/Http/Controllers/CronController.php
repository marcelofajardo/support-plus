<?php

namespace Modules\Setting\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CronController extends Controller
{

    public function index()
    {
        return view('setting::cron.index');
    }

    public function store(Request $request)
    {
        //
    }


}
