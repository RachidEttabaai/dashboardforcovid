<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\AboutController;

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

Route::get("/",[HomeController::class,"show"])->name("home");

Route::get("/data",[DataController::class,"show"])->name("datas");

Route::get("/map",[MapController::class,"show"])->name("maps");

Route::get("/about",[AboutController::class,"show"])->name("about");

Route::post("/jsondata",[ApiController::class,"jsondata"])->name("jsondata");
