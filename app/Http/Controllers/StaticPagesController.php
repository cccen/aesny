<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home(){
<<<<<<< HEAD
        return view('staticPages/home');
    }

    public function help(){
        return view('staticPages/help');
    }

    public function about(){
        return view('staticPages/about');
=======
        return view('static_pages/home');
    }

    public function help(){
        return view('static_pages/help');
    }

    public function about(){
        return view('static_pages/about');
>>>>>>> static-pages
    }
}
