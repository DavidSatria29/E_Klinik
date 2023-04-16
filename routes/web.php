<?php

use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

// user
Route::get('/admin/{user}/edit', [AdminController::class, 'edit'])->name('edit_create.useredit');
Route::patch('/admin/user/{user}', [AdminController::class, 'update'])->name('user.update');

// chat
Route::get('/admin/{chat}/editchat', [AdminController::class, 'editchat'])->name('edit_create.chatedit');
Route::patch('/admin/chat/{chat}', [AdminController::class, 'updatechat'])->name('chat.update');
