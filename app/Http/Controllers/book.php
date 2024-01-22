<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class book extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            ]

            ];

            return view('books.index',['books'=>$books]);
    }

}
