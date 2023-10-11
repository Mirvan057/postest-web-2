<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bukucontroller;
use App\Http\Controllers\belicontroller;
use App\Http\Controllers\buatcontroller;

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

Route::get('/', function () {
    return view('welcome');
});



route::get('book', [bukucontroller::class, 'index']);

Route::get('/beli', function () {
    return view('beli');
});

Route::get('/beli', function () {
    return view('beli');
});
Route::get('/customer', function () {
    return view('customer');
});

Route::get('/create', function () {
    return view('create');
});

Route::post('/beli/store',[bukucontroller::class,'store']);

Route::get('/customer', [belicontroller::class, 'index']);

Route::post('/create/store',[buatcontroller::class,'store']);