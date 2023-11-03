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

Route::get("/",[
    \App\Http\Controllers\PostagemController::class,
    "index"
]);
Route::get("/new",[
    \App\Http\Controllers\PostagemController::class,
    "new"
]);
Route::post("/new",[
    \App\Http\Controllers\PostagemController::class,
    "save"
]);

Route::get("/view/{id}",[
    \App\Http\Controllers\PostagemController::class,
    "view"
]);
