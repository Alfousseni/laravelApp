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

    public function add(){
        return view('produit.addproduit');

    }
    public function save(Request $request){
        $p=new Produit();
        $p->nom=$request->nom;
        $p->prix=$request->prix;
        $p->quantite=$request->quantite;
        $p->save();
        //return back();
        return redirect()->route('list_produit')->with('message', 'produit ajouter');
    }
}
