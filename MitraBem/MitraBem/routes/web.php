<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\adminController;
use App\Events\MessageCreated;
// use Illuminate\Support\Facades\Auth;

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

    return view('start');
});

Route::get('/start', function () {
    return view('start');
});

Route::get('/pesan', function () {
    return view('Pesan');
});

Route::get('/profile', function () {
    return view('Profile');
});

Route::get('/editprofile', function () {
    return view('editProfile');
});

Route::get('/chat', function () {

    MessageCreated::dispatch('lorem ipsum dolet');
    // Events(new MessageCreated);

    return view('profile');
});

Route::resource('/admin', adminController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/create_pesan', [PemesananController::class, "store"]);
Route::get('/pemesanan', [PemesananController::class, "show"]);
Route::get('/detail-pemesanan/{id}', [PemesananController::class, "showbyId"]);
Route::get('/', [PemesananController::class, "show3"]);
