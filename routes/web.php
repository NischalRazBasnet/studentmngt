<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\programController;
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


Route::get('/program', [App\Http\Controllers\HomeController::class, 'index'])->name('program');
Route::post('/program', [App\Http\Controllers\programController::class, 'store'])->name('programstore');
Route::get('/program/edit/{id}', [App\Http\Controllers\programController::class, 'edit'])->name('programedit');
Route::get('/program/delete/{id}', [App\Http\Controllers\programController::class, 'destroy'])->name('programdelete');
Route::post('/program/update/{id}', [App\Http\Controllers\programController::class, 'update'])->name('programupdate');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/student', [App\Http\Controllers\studentController::class, 'index'])->name('student');
Route::post('/student', [App\Http\Controllers\studentController::class, 'store'])->name('studentstore');
Route::get('/student/edit/{id}', [App\Http\Controllers\studentController::class, 'edit'])->name('studentedit');
Route::get('/student/delete/{id}', [App\Http\Controllers\studentController::class, 'destroy'])->name('studentdelete');
Route::post('/student/update/{id}', [App\Http\Controllers\studentController::class, 'update'])->name('studentupdate');