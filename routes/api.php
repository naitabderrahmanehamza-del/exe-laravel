<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\taskcontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\welkomcontroler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// ikiipùopô)ô)o)o)
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
// Route::get('welkom', [welkomcontroler::class,'welkom1']);
// Route::get('aph/{id}', [UserController::class,'checkuser']);
// Route::post('ali', [taskcontroller::class,'mont']);
Route::get('ana', [taskcontroller::class,'index']);
// Route::put('wac/{id}', [taskcontroller::class,'mise']);
Route::get('t/{id}', [taskcontroller::class,'index1']);
// Route::delete('k/{id}', [taskcontroller::class,'sup']);
//  Route::get('i',[ProjectController::class,'index']);
// Route::get('s/{id}',[ProjectController::class,'show']);
// Route::post('store',[ProjectController::class,'store']);
// Route::put('u/{id}',[ProjectController::class,'update']);
// Route::delete('d/{id}',[ProjectController::class,'destroy']);
 //Route::apiResource('tasks',taskcontroller::class);
 Route::apiResource('t',ProjectController::class);
