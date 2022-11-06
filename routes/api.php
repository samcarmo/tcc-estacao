<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\StationController;
use App\Http\Controllers\Api\WeatherValueController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('users', UserController::class);
Route::apiResource('stations', StationController::class);

// Route::get('station/{Station}/weathervalues', function ($station) {
//     // echo $station;
//     // return $station;
//     // var_dump($station);
//     // echo 'Entrei aqui';
//     // print_r('Aqui');
//     if (isset($station)) {
//         WeatherValueController::class;
//     } else {
//         echo 'Id opcional';
//     }
// });

Route::apiResource('station/{station}/weathervalues', WeatherValueController::class);
