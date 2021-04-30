<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WikiController;
use App\Http\Controllers\userController;
use App\Http\Controllers\RoleController;

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
    return view('auth.login');
});

Auth::routes();

Route::resource('wikis', WikiController::class)->middleware('auth');
Route::resource('users', userController::class)->middleware('auth');
Route::resource('roles', RoleController::class)->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
