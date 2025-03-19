<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/berita/{category}', function ($category) {
//     return view('berita.category', ['category' => $category]);
// });

// Route::get('/galeri', function () {
//     return view('galeri.index');
// });

// Route::get('/majalah', function () {
//     return view('publikasi.majalah');
// });

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/', function (){
    return view('index');
});