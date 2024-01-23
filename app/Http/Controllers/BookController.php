<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
    {
        $book = book::get();
        return view('index', ['book' => $book]);
    }
    public function show($id){
        $book = book::find($id);
        return view('show', ['book' => $book]);
    }
    public function update(Request $request, $id){
        $book = book::find($id);
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->year = $request->input('year');
        $book->save();
        return redirect('/book');
    }
    public function create($id){
        $book = new Book;
        $book->name;
    }
    public function store (Request $request){
        $request->validate[[
            'title'=>['required' , 'max:255' , 'min:5'],
            'author'=>['required','max:1002','min:10'],
            'year'=>['required','regx:[0-9][4]']
        ]];
    }
}