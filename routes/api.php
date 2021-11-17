<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\MobileLegendControllerAPI;

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

Route::get('mobile-legend-stats',[\App\Http\Controllers\API\MobileLegendControllerAPI::class,'index']);
Route::post('login',[\App\Http\Controllers\API\MobileLegendControllerAPI::class,'login']);
Route::post('register',[\App\Http\Controllers\API\MobileLegendControllerAPI::class,'register']);
Route::post('getAllMLController',[\App\Http\Controllers\API\MLController::class,'getAllMLController']);
Route::post('getMLStat',[\App\Http\Controllers\API\MLController::class,'getMLStat']);
Route::post('searhMLStat',[\App\Http\Controllers\API\MLController::class,'searhMLStat']);
