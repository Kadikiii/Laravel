<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Homepage () {
        return view("tst" ,['name: ' => 'Poe']);
    }
    public function Aboutpage () {
        return ('About Page');
    }
    public function index()
    {
        $books = [
            [
                'id' => 1,
                'title' => 'The Hobbit',
                'author' => 'Morris',
                'year' => 1937
            ],
            [
                'id' => 2,
                'title' => 'The Lord of the Rings',
                'author' => 'James',
                'year' => 1954
            ],
            [
                'id'=> 3,
                'title' => 'The Game',
                'author' => 'Yen',
                'year' => 1987
            ],
            [
            'id'=> 4,
            'title' => 'The Light',
            'author' => 'Ford',
            'year' => 2007
            ]

            ];

            return view('index',['books'=>$books]);
    }
}
