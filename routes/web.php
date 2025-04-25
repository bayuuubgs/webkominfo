<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('home');
});

Route::prefix('home')->name('home.')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('index');

    Route::get('/profil', function () {
        return view('profil');
    })->name('profil');

    Route::get('/customteks', function () {
        return view('customteks');
    })->name('customteks');

    Route::get('/customPDF', function () {
        return view('customPDF');
    })->name('customPDF');

    Route::get('/berita', function () {
        return view('berita');
    })->name('berita');

    Route::get('/berita/detailberita', function () {
        return view('detailberita');
    })->name('berita.detail');

    Route::get('/galerifoto', function () {
        return view('galerifoto');
    })->name('galerifoto');

    Route::get('/video', function () {
        return view('video');
    })->name('video');

    Route::get('/video/detailvideo', function () {
        return view('detailvideo');
    })->name('video.detail');

    Route::get('/download', function () {
        return view('download');
    })->name('download');

    Route::get('/majalah', function () {
        return view('majalah');
    })->name('majalah');

    Route::get('/majalah/detailmajalah', function () {
        return view('detailmajalah');
    })->name('majalah.detail');

    Route::get('/bidangsekretariat', function () {
        return view('bidangsekretariat');
    })->name('bidangsekretariat');
});


// use App\Http\Controllers\VideoController;

// Route::get('/video', [VideoController::class, 'show']);
