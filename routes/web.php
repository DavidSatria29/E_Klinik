<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Models\Chat;
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
//admin
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

// user
Route::get('/admin/{user}/edit', [AdminController::class, 'edit'])->name('edit_create.useredit');
Route::patch('/admin/user/{user}', [AdminController::class, 'update'])->name('user.update');
Route::get('/admin/{user}/deleteuser', [AdminController::class, 'deleteuser'])->name('user.delete');
Route::delete('/admin/{user}/deleteuser', [AdminController::class, 'destroyuser'])->name('user.destroy');

// contact
Route::get('/admin/{contact}/editcontact', [AdminController::class, 'editcontact'])->name('edit_create.contactedit');
Route::patch('/admin/contact/{contact}', [AdminController::class, 'updatecontact'])->name('contact.update');
Route::get('/admin/{contact}/deletecontact', [AdminController::class, 'deletecontact'])->name('contact.delete');
Route::delete('/admin/{contact}/deletecontact', [AdminController::class, 'destroycontact'])->name('contact.destroy');

// chat
Route::get('/admin/{chat}/editchat', [AdminController::class, 'editchat'])->name('edit_create.chatedit');
Route::patch('/admin/chat/{chat}', [AdminController::class, 'updatechat'])->name('chat.update');
Route::get('/admin/{chat}/deletechat', [AdminController::class, 'deletechat'])->name('chat.delete');
Route::delete('/admin/{chat}/deletechat', [AdminController::class, 'destroychat'])->name('chat.destroy');

// article
Route::get('/admin/{article}/editarticle', [AdminController::class, 'editarticle'])->name('edit_create.articleedit');
Route::patch('/admin/article/{article}', [AdminController::class, 'updatearticle'])->name('article.update');
Route::get('/admin/create', [AdminController::class, 'createarticle'])->name('edit_create.articlecreate');
Route::get('/admin/{article}/deletearticle', [AdminController::class, 'deletearticle'])->name('article.delete');
Route::delete('/admin/{article}/deletearticle', [AdminController::class, 'destroyarticle'])->name('article.destroy');
Route::post('/admin', [AdminController::class, 'store'])->name('article.store');

//Authentication
Auth::routes();
//home
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/{article}', [HomeController::class, 'show'])->name('article.show');
Route::post('/home', [HomeController::class, 'store'])->name('contact.store');

//chat user
Route::get('/chat', [ChatController::class, 'index'])->name('chat');
Route::post('/chat', [ChatController::class, 'store'])->name('chat.store');
