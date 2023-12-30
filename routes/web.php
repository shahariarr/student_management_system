<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OtherController;
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
route::get('/student/about',[OtherController::class,'about'])->name('student.about');
route::get('/student/bloge',[OtherController::class,'bloge'])->name('student.bloge');
route::get('/student/contact',[OtherController::class,'contact'])->name('student.contact');
Route::resource('/student', HomeController::class);

Route::get('/student/{id}/delete',[HomeController::class,'destroy'])->name('student.delete');
route::get('/student/{id}/update',[HomeController::class,'update'])->name('student.update');
route::post('/student/search',[HomeController::class,'search'])->name('student.search');



