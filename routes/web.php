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


Route::get('/', function () {
    return view('welcome');
});


//Praktikum 1
//1
Route::get('/', function () {
    echo "Hi! Selamat Datang di Website Laravel";
   });

//2
Route::get('/about', function () {
    echo "Nama  : Ardha Nur Azizah <br>";
    echo "NIM   : 2041720038 <br>";
    echo "Kelas : TI-2G <br>";
   });

//3
Route::get('/articles/{id}', function ($id){
    echo "Ini adalah halaman Artikel dengan ID: ".$id;
});
