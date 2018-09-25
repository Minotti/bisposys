<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.welcome');
    }

    public function home()
    {
        return view('site.home');
    }
}