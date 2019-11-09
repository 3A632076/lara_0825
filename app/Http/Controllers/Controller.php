<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
    public function index()
    {
        //
        return view('index');
    }

    public function show()
    {
        //
        return view('post');
    }

    public function about()
    {
        //
        return view('about');
    }

    public function contact()
    {
        //
        return view('contact');
    }
}
