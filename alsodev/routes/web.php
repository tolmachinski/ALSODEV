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

Route::get('/', [App\Http\Controllers\MainController::class, 'index']);
Route::post('/feedback/check', [App\Http\Controllers\MainController::class, 'feedback_check']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('home/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete.id');
Route::get('home/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('news.id');
Route::post('home/edit/{id}/new', [App\Http\Controllers\HomeController::class, 'edit_new']);
