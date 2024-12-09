<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategorieController;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\FournisseurController;
use App\Http\Controllers\Api\CommandeController;
use App\Http\Controllers\Api\LigneCommandeController;
use App\Http\Controllers\Api\VenteController;
use App\Http\Controllers\Api\LigneVenteController;
use App\Http\Controllers\Api\RoleUserController;
use App\Http\Controllers\Api\EmplacementController;
use App\Http\Controllers\Api\FactureController;
use App\Http\Controllers\Api\InventaireController;
use App\Http\Controllers\Api\PaiementController;
use App\Http\Controllers\Api\TransfertController;
use App\Http\Controllers\Api\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('categories', CategorieController::class);
Route::apiResource('articles', ArticleController::class);
Route::apiResource('fournisseurs', FournisseurController::class);
Route::apiResource('commandes', CommandeController::class);
Route::apiResource('ligne-commandes', LigneCommandeController::class);
Route::apiResource('ventes', VenteController::class);
Route::apiResource('ligne-ventes', LigneVenteController::class);
Route::apiResource('roles-users', RoleUserController::class);
Route::apiResource('emplacements', EmplacementController::class);
Route::apiResource('factures', FactureController::class);
Route::apiResource('inventaires', InventaireController::class);
Route::apiResource('paiements', PaiementController::class);
Route::apiResource('transferts', TransfertController::class);
Route::apiResource('users', UserController::class);
