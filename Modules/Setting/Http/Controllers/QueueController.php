<?php

namespace Modules\Setting\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class QueueController extends Controller
{

    public function index()
    {
        return view('setting::queue.index');
    }

    public function store(Request $request)
    {
        //
    }

}
