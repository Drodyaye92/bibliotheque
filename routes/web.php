<?php

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
//Route::get('/', function () {
 //  return view('welcome');
//});

//Route::get('/', function () {
 //  return view('inscription');
//});


Route::get('/', 'Authcontroller@inscrit')->name('inscription');
Route::get('/connexion',function (){
   return view ('connexion');
})->name('connexion');
Route::post('/inscription','Authcontroller@store')->name('inscrit.store');
Route::post('/connexion', 'Authcontroller@authentificate')->name('authentificate');
Route::get('/enregister', 'Authcontroller@enregister')->name('enregister');
Route::post('/enregistera','livrecontroller@save')->name('enregister.save');
Route::post('/enregister','Admicontroller@save')->name('auteur.save');
Route::get('/liste',function(){
   return view('liste');
})->name('lister');



