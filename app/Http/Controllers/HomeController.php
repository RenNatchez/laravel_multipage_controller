<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $section1_img  = 'img/intro.jpg';
        $section1_tittle_1  = 'Fresh Coffee';
        $section1_tittle_2  = 'WORTH DRINKING';
        $section1_text  = 'Every cup of our quality artisan coffee starts with locally sourced, hand picked
        ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning
        routine - we guarantee it!';
        $section1_btn  = 'Visit Us Today!';
        $section_2 = (object)[
        'title_1'=> 'Our Promise',
        'title_2'=> 'To You',
        'text'=> 'When you walk into our shop to start your day, we are dedicated to providing you
        with friendly service, a welcoming atmosphere, and above all else, excellent products made with
        the highest quality ingredients. If you are not satisfied, please let us know and we will do
        whatever we can to make things right!',
    ];
        return view('home', compact('section1_tittle_1','section1_tittle_2','section1_text','section1_btn','section1_img','section_2'));
    }
}
