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

//Route::middleware(['addCSPHeader'])->group(function () {
    Route::get('/', function () {
        return view('app');
    });

    Route::get('/verify-email', function () {
        return view('app');
    })->name('verify-email');

    Route::get('/smarthire/user', function () {
        return view('app');
    })->name('user');

    Auth::routes([
        'verify'=> true
    ]);
//});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
