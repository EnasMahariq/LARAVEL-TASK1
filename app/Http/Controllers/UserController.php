<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users=['Enas','Ahmad','Tia','Mila'];
        return view('user.index',compact('users'));
    }


    public function create(){

        return view('user.create');
    }

    public function update(){
        $NewUsers=['Dana','Ahmad','Tia','Mila'];
        return view('user.update',compact('NewUsers'));
    }
}
