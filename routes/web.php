<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\BookingController;
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

Route::resource('admin', ReviewController::class);
Route::resource('bo', BookingController::class);
Route::get('/hapus/bo/{id}', [BookingController::class, 'destroy']);

Route::get('/create', function () {
    return view('create');
});

Route::get('/hapus/{id}', [ReviewController::class, 'destroy']);
Route::get('/edit/{id}', [ReviewController::class, 'edit']);
Route::get('/update/{id}', [ReviewController::class, 'update']);


//frontend
Route::resource('home', FrontController::class);

//check route

Route::get('/booking', function () {
    return view('front-end.bb');
});

Route::get('/contact', function () {
    return view('front-end.contact');
});

Route::get('/explore', function () {
    return view('front-end.explore');
});

Route::get('/rooms', function () {
    return view('front-end.rooms');
});


// Route::resource('home', FrontController::class);
