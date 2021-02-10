<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
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

Route::view('/', 'enunciado');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function(){
    $users = \App\Models\User::all()->where('role', 0);

    return view('admin', ['users'=>$users]);
});

Route::get('/flights', function(){
    $flights = \App\Models\Flight::select('*')->where('date', '>=', Carbon::now())->orderBy('date', 'asc')->get();

    return view('flights', ['flights'=>$flights]);
});

Route::post('/reserve/{id}', 'TickerController@store')->name('reserve');