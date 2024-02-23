<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::get('/register', [UserController::class, 'register'])->name('registration');
Route::post('/register', [UserController::class, 'handleRegistration'])->name('registration');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'handleLogin'])->name('login');


Route::get('accueil', [ArticleController::class, 'index'])->name('accueil');


// si l'utilisateur n'est pas authentifié,
//il ne peut pas avoir accès aux pages

Route::middleware(['auth'])->group(function () {
    // utilisation des préfixes
    Route::prefix('articles')->group(function () {
        Route::post('/', [ArticleController::class, 'store'])->name('articles');
        Route::get('/{id}', [ArticleController::class, 'show'])->name('articles.show')->withoutMiddleware('auth');
        Route::get('/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');;
        Route::put('/{article}/update', [ArticleController::class, 'update'])->name('articles.update');
        Route::delete('/{article}/delete', [ArticleController::class, 'delete'])->name('articles.delete');
    });

    Route::get('dashboard', [UserController::class, 'dashboard']);
});
