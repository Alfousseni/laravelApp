<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;

class ProduitController extends Controller
{
    public function index(){
        $produits=Produit::all();
        // dd($produits);
        return view('produit.produit',compact('produits'));
    }

    public function add(){
        $c=Categorie::all();
        return view('produit.addproduit',compact('c'));

    }
    public function save(Request $request){
        $p=new Produit();
        $p->nom=$request->nom;
        $p->prix=$request->prix;
        $p->quantite=$request->quantite;
        $p->categorie_id=$request->categorie_id;

        $p->save();
        //return back();
        return redirect()->route('list_produit')->with('message', 'produit ajouter');
    }

    public function delete_produit($id){
        $p=Produit::find($id);
        $p->delete();
        return redirect()->route('list_produit')->with('message', 'produit supprimer');

    }

    public function edit($id){
        $p =Produit::find($id);
        
        return view('produit.editproduit',compact('p'));
    }

    public function update(Request $request ,$id){
        $p =Produit::find($id);
        $p->nom=$request->nom;
        $p->prix=$request->prix;
        $p->quantite=$request->quantite;
        $p->update();
        return redirect()->route('list_produit')->with('message', 'produit modifier');

    }
}
