<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books=['oracle','aql','laravel'];
        return view('book.index',compact('books'));
    }


    public function create(){

        return view('book.create');
    }

    public function update(){
        $NewBooks=['java','c++','laravel'];
        return view('book.update',compact('NewBooks'));
    }
}
