<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AwalController;
use App\Http\Models\Contact;


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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::get('/', function () {
//     return view('index');
// });

/*
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
*/


//Praktikum2
/*
//1
Route::get('/', [PageController::class, 'index']);

//2
Route::get('/about', [PageController::class, 'about']);

//3
Route::get('/articles/{id}', [PageController::class, 'articles']);
*/

/*
//1
Route::get('/', [HomeController::class, 'index']);

//2
Route::get('/about', [AboutController::class, 'about']);

//3
Route::get('/articles/{id}', [ArticleController::class, 'articles']);
*/

//Praktikum 3
//1
// Route::get('/', [AwalController::class, 'index']);
// //2
// Route::prefix('category')->group(function () {
//     Route::get('/marbel-edu-games', function () {
//         echo"Marbel Edu Games";
//     });
//     Route::get('/marbel-and-friends-kids-games', function () {
//         echo"Marbel and Friens Kids Games";
//     });
//     Route::get('/riri-story-book', function () {
//         echo"Riri Story Book";
//     });
//     Route::get('/kolak-kids-songs', function () {
//         echo"Kolak Kids Songs";
//     });
// });
// //3
// Route::get('/news/{id}', function ($id) {
//     return 'News '.$id;
//     });
//     Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     //
//     });

    
// //4
// Route::prefix('program')->group(function () {
//     Route::get('/karir', function () {
//         echo"Karir";
//     });
//     Route::get('/magang', function () {
//         echo"Magang";
//     });
//     Route::get('/kunjungan-industri', function () {
//         echo"Kunjungan Industri";
//     });
// });
    
// //5
// Route::get('/about-us', function () {
//     echo "Saya bernama Ardha <br>
//     kalian bisa akses semua akun medsos di <br>
//     @ardhanurazizah";
//    });
   
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/home', function(){
//     return view('home', ['contacts'=>Contact::index()]);
// });

//  Route::get('/', [HomeController::class, 'index']);

//  Auth::routes();

//  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
