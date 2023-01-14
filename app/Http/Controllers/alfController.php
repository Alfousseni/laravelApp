<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class alfController extends Controller
{
    public function index2(){

        $name2='Alf';
        return view('alf',compact('name2'));
    }
}
