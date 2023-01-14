<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index(){
        $name="Alfousseni";

        return view('etudiant',compact('name'));
    }
}
