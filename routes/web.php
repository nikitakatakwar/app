<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('add-teachers', function () {
    return view('add-teacher');
});
Route::post('add-teachers',[HomeController::class,"create"]);
Route::post('update',[HomeController::class,"update"])->name('update');
Route::get('/redirects',[HomeController::class,"index"])->name('index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('edit/{id}',[HomeController::class,'show']);
Route::get('delete/{id}',[HomeController::class,'delete']);
route::get('/uploadpage',[HomeController::class,'uploadpage'])->name('course');
route::post('/upload',[HomeController::class,'upload'])->name('upload');

Route::get('/list',[HomeController::class,'showcourse'])->name('list');

Route::get('/download/{file}',[HomeController::class,'download']);
Route::get('/view/{id}',[HomeController::class,'view']);
