<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        $section_1 = (object)[
            'img'=> 'img/about.jpg',
            'title_1'=> 'Strong Coffee, Strong Roots',
            'title_2'=> 'ABOUT OUR CAFE',
            'text_1'=> 'Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee
            sourced from artisan farmers in various regions of South and Central America. We are
            dedicated to travelling the world, finding the best coffee, and bringing back to you here in
            our cafe.',
            'text_2'=> 'We guarantee that you will fall in <em>lust</em> with our decadent blends the
            moment you walk inside until you finish your last sip. Join us for your daily routine, an
            outing with friends, or simply just to enjoy some alone time.',
        ];
        $section_2 = (object)[
            'title_1'=> 'Come On In',
            'title_2'=> "We're Open",
            'close'=> "Closed",
            'open_full'=> "7:00 AM to 8:00 PM",
            'open_litle'=> "9:00 AM to 5:00 PM",
            'street'=> "1116 Orchard Street",
            'city'=> "Golden Valley, Minnesota",
            'call_me'=> "Call Anytime",
            'phone'=> "(317) 585-8468",
            'days'=> ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday',],
        ];
        return view('pages.store',compact('section_1','section_2'));
    }
}
