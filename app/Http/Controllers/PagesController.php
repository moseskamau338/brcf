<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View
    {
        return view('pages.welcome');
    }

    public function about(): \Illuminate\Contracts\View\View
    {
        return view('pages.about', ['pictures' =>
            collect(Storage::disk('visitations')->allFiles())->map(function($image){
                return Storage::disk('visitations')->url($image);
            })->toArray()
        ]);
    }

    public function contact(): \Illuminate\Contracts\View\View
    {
        return view('pages.contact');
    }
    public function donate(): \Illuminate\Contracts\View\View
    {
        return view('pages.donate');
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
