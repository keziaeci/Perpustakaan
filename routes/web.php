<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\User\UserController;
use App\Models\Transaksi;
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

// Route::get('/', function () {
//     return view('index');
// })->name('dashboard')->middleware('auth');
// // Route::get('/welcome', function () {
// //     return view('welcome');
// // });


Route::controller(AuthController::class)->group(function () {
    Route::get('/login' , 'index')->middleware('guest')->name('login');
    Route::post('/login/auth', 'authenticate')->middleware('guest')->name('login-auth');
    Route::post('/logout', 'logout')->middleware('auth')->name('logout');

});

Route::controller(BukuController::class)->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/' , 'index')->name('dashboard');
        Route::get('/buku/{buku}/detail' , 'show')->name('buku-detail');
    });

});

Route::controller(TransaksiController::class)->group(function () {
    Route::middleware('auth')->group(function () {
        Route::post('/buku/{buku}/pinjam' , 'store')->name('buku-pinjam');
        Route::get('/buku/{transaksi}/akses' , 'edit')->name('buku-request-edit');
        Route::get('/buku/transaksi' , 'index')->name('transaksi');
        Route::patch('/buku/{transaksi}/store' , 'update')->name('transaksi-store');
        // Route::get('/buku/transaksi/pinjam' , 'borrowing')->name('transaksi-terpinjam');
        // Route::get('/buku/transaksi/kembali' , 'index')->name('transaksi-kembali');
    });

});

Route::controller(UserController::class)->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/koleksi' , 'index')->name('buku-saya');
        Route::get('/koleksi/pending' , 'pending')->name('buku-pending');
    });

});