<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Todo;
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
    return redirect('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('todo', 'App\Http\Controllers\HomeController')->middleware(Todo::class);;

Route::get('/notes', [App\Http\Controllers\HomeController::class, 'notes'])->name('notes');