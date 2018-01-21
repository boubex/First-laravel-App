<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        $title = 'About us';
        return view('pages.about', compact('title'));
    }

    public function services(){
        $data = array(
            'title' => 'services',
            'services' => ['web Designer'.'illustrator','ios developper']
        );
        return view('pages.services', compact('title'));
    }

    public function home(){
        $title = 'welcome to laravel';
        return view('/home', compact('title'));
    }

}
