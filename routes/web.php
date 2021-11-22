<?php

use App\Http\Controllers\ProductController;
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
});
Route::prefix('products')->group(function (){
    Route::get('/',[ProductController::class,'index'])->name("products.index");
    Route::get('/detail/{id}',[ProductController::class,'show'])->name("products.show");
    Route::get('/create',[ProductController::class,'showFormCreate'])->name("products.create");
    Route::post('/create',[ProductController::class,'store'])->name("products.store");
    Route::get('/delete/{id}',[ProductController::class,'destroy'])->name("products.delete");
    Route::get('/edit/{id}',[ProductController::class,'showFormEdit'])->name("products.showFormEdit");
    Route::post('/edit/{id}',[ProductController::class,'update'])->name("products.update");

});
