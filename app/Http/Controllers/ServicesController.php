<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        $section =[(object)
            ['value1'=>'ml-auto',
            'value2'=>'mr-auto',
            'title_1'=>'Blended to Perfection',
            'title_2'=>'Coffees & Teas',
            'img'=>'img/products-01.jpg',
            'texte'=>"We take pride in our work, and it shows. Every time you order a beverage from us, we
            guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan
            Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced
            black coffee, you will be coming back for more."],
        (object)
            ['value1'=>'mr-auto',
            'value2'=>'ml-auto',
            'title_1'=>'Delicious Treats, Good Eats',
            'title_2'=>'Bakery & Kitchen',
            'img'=>'img/products-02.jpg',
            'texte'=>"Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods."],
        (object)
            ['value1'=>'ml-auto',
            'value2'=>'mr-auto',
            'title_1'=>'From Around the World',
            'title_2'=>'Bulk Speciality Blends',
            'img'=>'img/products-03.jpg',
            'texte'=>"Travelling the world for the very best quality coffee is something take pride in. When you visit us, you'll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details."],
            ];
        return view('pages.products', compact('section'));
    }
}

// @if (($section_1->ok) === 1)
// <p>c'est 1</p>
// @elseif (($section_1->ok) === 0)
// <p>c'est pas 1</p>
// @endif
