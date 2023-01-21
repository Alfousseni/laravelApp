<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    public function index(){
        $produits=Produit::all();
        // dd($produits);
        return view('produit.produit',compact('produits'));
    }
}
