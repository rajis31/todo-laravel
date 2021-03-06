<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\TodoController;


Route::get("/",[TodoController::class,"main"]);
Route::post("/share", [TodoController::class,"share"]);
Route::get("/submission/{id}",[TodoController::class,"submission"]);