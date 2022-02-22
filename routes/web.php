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


Route::get('/',[\App\Http\Controllers\ProductController::class,'index'])->name('home');
Route::get('detail/{id}',[\App\Http\Controllers\ProductController::class,'detail'])->name('detail');




Route::view('prime','pages.prime')->name('prime');
Route::post('prime',[\App\Http\Controllers\primeController::class,'index'])->name('prime');


Route::view('series','pages.series')->name('series');
Route::post('series',[\App\Http\Controllers\Series::class,'index']);


Route::view('password-generator','pages.passwordGenerator')->name('passwordGenerator');
Route::post('password-generator',[\App\Http\Controllers\PasswordGeneratorController::class,'index']);
