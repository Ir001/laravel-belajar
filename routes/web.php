<?php

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
// use App\Http\Controllers\DosenController;
/* Route::get('/', function () {
    return view('welcome');
});
Route::get('hello', function(){
    return view('hello');
});
Route::get('dosen', [DosenController::class, 'index']); */
Route::view('/articles', 'app');
Route::view('/article/edit/{id}', 'app');
Route::view('/article/{id}', 'app');
Route::view('/', 'app');
Route::view('/{path}', 'app');