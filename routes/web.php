<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DestroyController;

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
    return view('pages.index');
});

Route::get('/home', [PagesController::class,'home'])->name('home');


Route::get('/records',[PagesController::class,'records'])->name('records');

Route::get('/records', [RegisterController::class,'records'])->name('viewrecords');

Route::get('view/{id}',[PagesController::class,'view'])->name('view');

Route::get('show/{id}', [PagesController::class, 'show'])->name('show');

Route::post('update/{id}', [PagesController::class, 'update'])->name('update');

Route::get('delete/{id}',[PagesController::class, 'delete'])->name('delete');


Route::get('/booking', [RegisterController::class,'booking'])->name('booking');
Route::post('/booking', [RegisterController::class,'store']);




