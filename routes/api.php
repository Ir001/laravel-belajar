<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });[DosenController::class, 'index']
Route::get('/articles', [ArticleController::class, 'index']);
Route::post('/articles/store', [ArticleController::class, 'store']);
Route::get('/articles/edit/{id}', [ArticleController::class, 'getArticle']);
Route::get('/articles/{id}', [ArticleController::class, 'getArticle']);
Route::put('/articles/{id}', [ArticleController::class, 'update']);
Route::delete('/articles/delete/{id}', [ArticleController::class, 'delete']);