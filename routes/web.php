<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
Route::get('/', function () {
    return view('welcome');
});

// Route basic
Route::get('about', function () {
    return 'Ini Halaman About';
});

Route::get('profile', function () {
    return view('profile');
});

// Route parameter (di tandai {})
Route::get('produk/{namaProduk}', function ($a) {
    return 'Saya Membeli <b>' . $a . '</br>';
});

Route::get('beli/{barang}/{jumlah}', function ($a, $b) {
    return view('beli', compact('a', 'b'));
});

// Route optional parameter
Route::get('kategori/{namaKategori?}', function ($nama = null) {
    if ($nama) {
        return 'Anda Memilih Kategori: ' . $nama;
    } else {
        return 'Anda Belum Memilih Kategori!';
    }
});

Route::get('promo/{barang?}/{kode?}', function ($barang = null, $kode = null) {
    return view('promo', compact('barang', 'kode'));
});

// Route siswa
use App\Http\Controllers\Mycontroller;
Route::get('siswa', [Mycontroller::class, 'index']);

// create
Route::get('siswa/create', [Mycontroller::class, 'create']);
Route::post('/siswa', [Mycontroller::class, 'store']);

// show
Route::get('siswa/{id}', [Mycontroller::class, 'show']);

// edit data
Route::get('siswa/{id}/edit', [Mycontroller::class, 'edit']);
Route::put('siswa/{id}', [Mycontroller::class, 'update']);

// delete
Route::delete('siswa/{id}', [MyController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Import Middleware
use App\http\Middleware\Admin;
// Route Admin / Backend
Route::group(
    [
        'prefix' => 'admin',
        'middleware' => ['auth', Admin::class],
    ],
    function () {
        Route::get('/', [BackendController::class, 'index']);
    },
);
