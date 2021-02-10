<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Models\Flight;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('flights', function($id){
    $flights = Flight::all();
    return new JsonResponse($flights, 201);
});

Route::get('flights/{id}', function($id){
    $selectedFlight = Flight::where('id', $id)->first();
    $passengers = $selectedFlight->users;

    return new JsonResponse($passengers, 201);
});