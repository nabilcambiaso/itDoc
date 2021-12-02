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

Route::get('/userid/{id?}', function ($id=null) {
    return "this is your id: ".$id;
});



// we don't need to validate in here since we validated in the app/providers/routeServiceProvider.php

//name validation (only letters)
// Route::get('/userName/{name?}', function ($name=null) {
//     return "hello ".$name;
// })->where('name','[a-zA-Z]+');

//id validation (only numbers)
// Route::get('/userId/{id?}', function ($id=null) {
//     return "hello ".$id;
// })->where('name','[0-9]');

//to retrieve the api call method (post or get)
Route::match(['get','post','put','delete'],'/students',function(Request $req){
    return 'request method is '.$req->method();
});
// any request methode 
Route::any('/posts/{id?}',function($id=null,Request $req){
     return 'the id is : '.$id .' and the request method is : '.$req->method();
});