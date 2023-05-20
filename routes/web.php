<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CertaintyFactorController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
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

// -- ADMIN --
Route::middleware(['auth', 'multiple-login:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    // user
    Route::get('/admin/user', [AdminController::class, 'adminuser'])->name('adminuser');
    Route::get('/admin/{user}/edit', [AdminController::class, 'edit'])->name('edit_create.useredit');
    Route::patch('/admin/user/{user}', [AdminController::class, 'update'])->name('user.update');
    Route::get('/admin/{user}/deleteuser', [AdminController::class, 'deleteuser'])->name('user.delete');
    Route::delete('/admin/{user}/deleteuser', [AdminController::class, 'destroyuser'])->name('user.destroy');

    // contact
    Route::get('/admin/contact', [AdminController::class, 'admincontact'])->name('admincontact');
    Route::get('/admin/{contact}/editcontact', [AdminController::class, 'editcontact'])->name('edit_create.contactedit');
    Route::patch('/admin/contact/{contact}', [AdminController::class, 'updatecontact'])->name('contact.update');
    Route::get('/admin/{contact}/deletecontact', [AdminController::class, 'deletecontact'])->name('contact.delete');
    Route::delete('/admin/{contact}/deletecontact', [AdminController::class, 'destroycontact'])->name('contact.destroy');

    // chat
    Route::get('/admin/chat', [AdminController::class, 'adminchat'])->name('adminchat');
    Route::get('/admin/{chat}/editchat', [AdminController::class, 'editchat'])->name('edit_create.chatedit');
    Route::patch('/admin/chat/{chat}', [AdminController::class, 'updatechat'])->name('chat.update');
    Route::get('/admin/{chat}/deletechat', [AdminController::class, 'deletechat'])->name('chat.delete');
    Route::delete('/admin/{chat}/deletechat', [AdminController::class, 'destroychat'])->name('chat.destroy');

    // article
    Route::get('/admin/article', [AdminController::class, 'adminarticle'])->name('adminarticle');
    Route::get('/admin/{article}/editarticle', [AdminController::class, 'editarticle'])->name('edit_create.articleedit');
    Route::patch('/admin/article/{article}', [AdminController::class, 'updatearticle'])->name('article.update');
    Route::get('/admin/create', [AdminController::class, 'createarticle'])->name('edit_create.articlecreate');
    Route::get('/admin/{article}/deletearticle', [AdminController::class, 'deletearticle'])->name('article.delete');
    Route::delete('/admin/{article}/deletearticle', [AdminController::class, 'destroyarticle'])->name('article.destroy');
    Route::post('/admin/create', [AdminController::class, 'store'])->name('article.store');
    

    // penyakit
    Route::get('/admin/penyakit', [AdminController::class, 'adminpenyakit'])->name('adminpenyakit');
    Route::get('/admin/{penyakit}/editpenyakit', [AdminController::class, 'editpenyakit'])->name('edit_create.penyakitedit');
    Route::patch('/admin/penyakit/{penyakit}', [AdminController::class, 'updatepenyakit'])->name('penyakit.update');
    Route::get('/admin/createpenyakit', [AdminController::class, 'createpenyakit'])->name('edit_create.penyakitcreate');
    Route::get('/admin/{penyakit}/deletepenyakit', [AdminController::class, 'deletepenyakit'])->name('penyakit.delete');
    Route::delete('/admin/{penyakit}/deletepenyakit', [AdminController::class, 'destroypenyakit'])->name('penyakit.destroy');
    Route::post('/admin/createpenyakit', [AdminController::class, 'storepenyakit'])->name('penyakit.store');
});

// -- USER --
Route::middleware(['auth', 'multiple-login:user;admin'])->group(function () {
    //penyakit
    Route::get('/cek', [CertaintyFactorController::class, 'index'])->name('check');
    Route::post('/cf-user', [CertaintyFactorController::class, 'cfUser'])->name('CF.user');
    Route::post('/hasil', [CertaintyFactorController::class, 'hasilCF'])->name('CF.hasil');
});

// -- DOCTOR
Route::middleware(['auth', 'multiple-login:doctor;admin'])->group(function () {
    Route::get('/doctor', [DoctorController::class, 'doctor'])->name('doctor');
    Route::get('/doctor/{chat}/editchat', [DoctorController::class, 'editchat'])->name('edit_create.chateditdoctor');
    Route::patch('/doctor/chat/{chat}', [DoctorController::class, 'updatechat'])->name('chat.updatedoctor');

    // penyakit
    Route::get('/doctor/penyakit', [DoctorController::class, 'doctorpenyakit'])->name('doctorpenyakit');
    Route::get('/doctor/{penyakit}/editpenyakit', [DoctorController::class, 'editpenyakit'])->name('doctoredit_create.penyakitedit');
    Route::patch('/doctor/penyakit/{penyakit}', [DoctorController::class, 'updatepenyakit'])->name('penyakit.update');
    Route::get('/doctor/createpenyakit', [DoctorController::class, 'createpenyakit'])->name('doctoredit_create.penyakitcreate');
    Route::get('/doctor/{penyakit}/deletepenyakit', [DoctorController::class, 'deletepenyakit'])->name('doctorpenyakit.delete');
    Route::delete('/doctor/{penyakit}/deletepenyakit', [DoctorController::class, 'destroypenyakit'])->name('penyakit.destroy');
    Route::post('/doctor/createpenyakit', [DoctorController::class, 'storepenyakit'])->name('penyakit.store');
});


//Home
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/home', [HomeController::class, 'store'])->name('contact.store');

Route::get('/home/about', [HomeController::class, 'about'])->name('about');
Route::get('/home/team', [HomeController::class, 'team'])->name('team');
Route::get('/home/service', [HomeController::class, 'service'])->name('service');
Route::get('/home/hubungi', [HomeController::class, 'hubungi'])->name('hubungi');
Route::get('/home/testimoni', [HomeController::class, 'testimoni'])->name('testimoni');


// Article
Route::get('/home/{article}', [HomeController::class, 'show'])->name('article.show');
//chat user
Route::get('/chat', [ChatController::class, 'index'])->name('chat');
Route::post('/chat', [ChatController::class, 'store'])->name('chat.store');

Route::get('/home/penyakit/{deskripsi}', [HomeController::class, 'showDeskripsi'])->name('penyakit.show');
// AUTH route
Auth::routes();
