<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $data = [
        [
            'name' => 'Daniele',
            'surname' => 'Bortolotti'
        ],
        [
            'name' => 'Ivan',
            'surname' => 'Iacona'
        ],
        [
            'name' => 'Giulia',
            'surname' => 'Belloni'
        ],
        [
            'name' => 'Michele',
            'surname' => 'Haimovici'
        ],
        [
            'name' => 'Crescenzo',
            'surname' => 'Greco'
        ]
    ];
    public function about () {
        return view('about');
    }
    public function blog () {
        return view('blog');
    }
    public function staff () {
        return view('staffb',
            [
                'title'=>'Our Staff',
                'staff'=>[]//$this->data
            ]);
    }
}
