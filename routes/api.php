<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\dummyAPI;
  use App\Http\Controllers\DeviceController;

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

//For API 
//Route::get("data",[dummyAPI::class,'getData']);

//for api get method
//Route::get("list",[DeviceController::class,'list']);

//FOR post Method

Route::post("add",[DeviceController::class,'add']);

//put
Route::put("update",[DeviceController::class,'update']);

//Delete
Route::delete("delete/{id}",[DeviceController::class,'delete']);

//search

Route::get("search/{name}",[DeviceController::class,'search']);