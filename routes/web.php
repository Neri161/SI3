<?php

use App\Http\Controllers\registroMailChimp;
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
    return view('index');
})->name("index");

Route::get('/master', function () {
    return view('master');
})->name("master");
Route::get('/menu', function () {
    return view('menu');
})->name("menu");
Route::get('/about', function () {
    return view('about');
})->name("about");
Route::get('/book', function () {
    return view('book');
})->name("book");
Route::post('/suscribirse', [registroMailChimp::class, 'registrarMail'],function(){
    return view('book');
})->name('suscribirse');