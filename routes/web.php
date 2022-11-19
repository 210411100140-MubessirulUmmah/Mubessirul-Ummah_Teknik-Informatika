<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', [StudentController::class,'index'])->name('index');
Route::get('/index', [StudentController::class,'index'])->name('index');
Route::get('/create',[StudentController::class,'create'])->name('create');
Route::post('/store',[StudentController::class,'store'])->name('store');
Route::get('/show',[StudentController::class,'show'])->name('show');
Route::get('/about',[StudentController::class,'about'])->name('about');
Route::get('/mahasiswa/{id}/edit',[StudentController::class,'edit'])->name('edit');
Route::put('/mahasiswa/{id}',[StudentController::class,'update'])->name('update');
Route::get('/mahasiswa/{id}/hapus',[StudentController::class,'destroy'])->name('destroy');
Route::resource('mahasiswa',StudentController::class);
Route::resource('students', StudentController::class);
