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


Route::get('accueil', [ArticleController::class,'index']);
// utilisation des préfixes

Route::prefix('articles')->group(function (){
    Route::post('/', [ArticleController::class,'store']);
    Route::get('/{id}', [ArticleController::class,'show']);
    Route::get('/{article}/edit', [ArticleController::class,'edit']);
    Route::put('/{article}/update', [ArticleController::class,'update']);
    Route::delete('/{article}/delete', [ArticleController::class,'delete']);
});

