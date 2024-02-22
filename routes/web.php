<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TestController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('test/{username}', [TestController::class,'methode1']);
Route::get('example', [TestController::class,'example']);
Route::get('direBonjour/{nom}', [TestController::class,'bonjour']);
Route::get('apropos/{nom}', [TestController::class,'afficherApropos']);
Route::get('ok',[TestController::class,'ok']);
Route::get('a', [TestController::class,'functA']);

Route::get('accueil', [ArticleController::class,'index']);
Route::post('articles', [ArticleController::class,'store']);
Route::get('articles/{id}', [ArticleController::class,'show']);
Route::get('articles/{article}/edit', [ArticleController::class,'edit']);
Route::put('articles/{article}/update', [ArticleController::class,'update']);
Route::delete('articles/{article}/delete', [ArticleController::class,'delete']);
