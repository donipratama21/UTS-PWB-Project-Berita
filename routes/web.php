<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\daftarController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login", [UtamaController::class,"login"]);
Route::get("/daftar", [UtamaController::class,"daftar"]);
Route::get("/home", [UtamaController::class,"home"]);
Route::get("/kriminal", [UtamaController::class,"kriminal"]);
Route::get("/olahraga", [UtamaController::class,"olahraga"]);
Route::get("/teknologi", [UtamaController::class,"teknologi"]);
Route::get("/about", [UtamaController::class,"about"]);
Route::get("/topan", [UtamaController::class,"topan"]);

Route::post("/proses", [UtamaController::class,"proses"])->name("berita_proses");
Route::post("/daftar", [daftarController::class,"daftar"])->name("berita_daftar");
