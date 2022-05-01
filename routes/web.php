<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Anocontroller;

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

//-----------------------delete web------------------------------
Route::GET('/delete/{id}',[Anocontroller::class, 'destroy'])->name('destroy');

//-----------------------update web------------------------------
Route::POST('/edit/{id}',[Anocontroller::class, 'update'])->name('update');

//-----------------------edit web------------------------------
Route::GET('/edit/{id}',[Anocontroller::class, 'edit'])->name('edit');

//-----------------------retrive web------------------------------
Route::GET('/',[Anocontroller::class, 'index'])->name('index');

//-----------------------insert web------------------------------
Route::POST('/',[Anocontroller::class, 'create'])->name('create');









