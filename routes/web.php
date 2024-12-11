<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\FournisseurController;
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
   return view('Layouts.index');
 });


 Route::resource('categories', CategorieController::class);
 Route::resource('articles', ArticleController::class);
 Route::resource('commandes', CommandeController::class);
 Route::resource('fournisseurs', FournisseurController::class);

