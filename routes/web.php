<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\VoteController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin_dashboard', [App\Http\Controllers\Admin\DashboardController::class,'index'])->middleware('role:admin');
Route::get('/user_dashboard', [App\Http\Controllers\User\IndexController::class,'index'])->middleware('role:user');

Route::get('/give/vote/{id}',[VoteController::class,'store'])->middleware('role:user')->name('vote.store');

