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

Route::prefix('home')->name('home.')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('index');

    Route::get('/profil', function () {
        return view('profil');
    })->name('profil');

    Route::get('/berita', function () {
        return view('berita');
    })->name('berita');

    Route::get('/galerifoto', function () {
        return view('galerifoto');
    })->name('galerifoto');

    Route::get('/video', function () {
        return view('video');
    })->name('video');

    Route::get('/download', function () {
        return view('download');
    })->name('download');

    Route::get('/majalah', function () {
        return view('majalah');
    })->name('majalah');
});

Route::view('/berita', 'berita');
Route::view('/galerifoto', 'galerifoto');
Route::view('/video', 'video');
Route::view('/download', 'download');
Route::view('/majalah', 'majalah');

// use App\Http\Controllers\VideoController;

// Route::get('/video', [VideoController::class, 'show']);
