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

// Route::patch('/admin/{user}', [AdminController::class, 'edit'])
// ->name('edit_create.useredit');



Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

Route::get('/admin/{user}/edit', [AdminController::class, 'edit'])->name('edit_create.useredit');
Route::patch('/admin/{user}', [AdminController::class, 'update'])->name('user.update');
