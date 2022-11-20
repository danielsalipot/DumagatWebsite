<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function language()
    {
        return view('pages.language');
    }

    public function developers()
    {
        return view('pages.developers');
    }
}
