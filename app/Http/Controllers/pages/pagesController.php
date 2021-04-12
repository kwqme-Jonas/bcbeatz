<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function beats()
    {
        return view('pages.beats');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
