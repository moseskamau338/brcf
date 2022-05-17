<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View
    {
        return view('pages.welcome');
    }

    public function about(): \Illuminate\Contracts\View\View
    {
        return view('pages.about');
    }

    public function contact(): \Illuminate\Contracts\View\View
    {
        return view('pages.contact');
    }

    public function volunteer(): \Illuminate\Contracts\View\View
    {
        return view('pages.volunteer');
    }

    public function blog(): \Illuminate\Contracts\View\View
    {
        return view('pages.blog');
    }
}
