<?php

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
use App\Http\Controllers\DireccionesController;
Route::post('/getDirecciones',[DireccionesController::class,'getDirecciones']);
use App\Http\Controllers\ViajesController;
Route::get('/getViajes',[ViajesController::class,'show']);
Route::delete('/DeleteViajes/{id_viajes}',[ViajesController::class,'destroy']);
Route::post('/AddViajes',[ViajesController::class,'store']);
Route::post('/UpdateViajes/{id_viajes}',[ViajesController::class,'update']);
