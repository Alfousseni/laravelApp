<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/etudiant', function () {
    $a=12;

    return view('etudiant',compact('a'));
});*/

Route::get('/etudiant', [EtudiantController::class,'index']);
Route::get('/alf',[alfController::class,'index2']);
Route::get('/produit',[ProduitController::class,'index'])->name('list_produit');
Route::get('/add_produit',[ProduitController::class,'add'])->name('form_produit');
Route::post('/add_produit',[ProduitController::class,'save'])->name('add_produit');
Route::get('/delete_produit/{id}',[ProduitController::class,'delete_produit'])->name('delete_produit');
Route::get('/edite_produit/{id}',[ProduitController::class,'edit'])->name('edite_produit');
Route::post('/update_produit/{id}',[ProduitController::class,'update'])->name('update_produit');

