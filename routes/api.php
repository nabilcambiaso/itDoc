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

// name required
Route::get('/user/{name}', function ($name) {
    return "hello ".$name;
});

//name optional
Route::get('/getuser/{name?}', function ($name=null) {
    return "hello ".$name;
});

//name validation (only letters)
Route::get('/userName/{name?}', function ($name=null) {
    return "hello ".$name;
})->where('name','[a-zA-Z]+');
