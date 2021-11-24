<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
})->name("home");
Route::prefix('products')->group(function (){
    Route::get('/',[ProductController::class,'index'])->name("products.index");
    Route::get('/detail/{id}',[ProductController::class,'show'])->name("products.show");
    Route::get('/create',[ProductController::class,'showFormCreate'])->name("products.create");
    Route::post('/create',[ProductController::class,'store'])->name("products.store");
    Route::get('/delete/{id}',[ProductController::class,'destroy'])->name("products.delete");
    Route::get('/edit/{id}',[ProductController::class,'showFormEdit'])->name("products.showFormEdit");
    Route::post('/edit/{id}',[ProductController::class,'update'])->name("products.update");
});
Route::prefix("/users")->group(function (){
    Route::get('/',[UserController::class,'index'])->name("users.index");
    Route::get('/detail/{id}',[UserController::class,'show'])->name("users.show");
    Route::get('/create',[UserController::class,'showFormCreate'])->name("users.create");
    Route::post('/create',[UserController::class,'store'])->name("users.store");
    Route::get('/delete/{id}',[UserController::class,'destroy'])->name("users.delete");
    Route::get('/edit/{id}',[UserController::class,'showFormEdit'])->name("users.showFormEdit");
    Route::post('/edit/{id}',[UserController::class,'update'])->name("users.update");
});
Route::get('/login',[AuthController::class,'showFormLogin'])->name('admin.showFormLogin');
Route::post('/login',[AuthController::class,'login'])->name('admin.login');
Route::get('/logout',[AuthController::class,'logout'])->name('admin.logout');
Route::get('/register',[AuthController::class,'showFormRegister'])->name('admin.showFormRegister');
Route::post('/register',[AuthController::class,'register'])->name('admin.register');
Route::get('/change-password',[AuthController::class,'showChangePasswordForm'])->name('admin.showChangePasswordForm');
