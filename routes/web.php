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