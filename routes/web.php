<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Backend\AdminPagesController;
use App\Http\Controllers\Backend\MainPagesController;
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

Route::get('/',[PagesController::class,'index'])->name('index');
Route::get('/admin',[AdminPagesController::class,'index'])->name('admin.index');
Route::get('/admin/main',[MainPagesController::class,'index'])->name('admin.main');
Route::put('/admin/main/update/{id}',[MainPagesController::class,'update'])->name('admin.main.update');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
