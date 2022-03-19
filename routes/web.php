<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

/***************************************************************************
*************************** BEGIN ROUTES (USERS) ***************************
***************************************************************************/

// Page d'accueil
Route::get('/', [ProductController::class, 'index'])->name('home');

// Page de détails d'un produit
Route::get('product/{id}', [ProductController::class, 'product'])->name('product');

// Pages d'articles hommes et femmes
Route::get('sex/{name}', [ProductController::class, 'showSex'])->name('sex');

// Page de soldes
Route::get('sold', [ProductController::class, 'sold'])->name('sold');

/***************************************************************************
**************************** END ROUTES (USERS) ****************************
***************************************************************************/



/***************************************************************************
*************************** BEGIN ROUTES (ADMIN) ***************************
***************************************************************************/

// Page d'administration
Route::get("admin", [ProductController::class, "admin"]) -> name("admin");
require __DIR__.'/auth.php';

// Création de produit
Route::get("create_product", [ProductController::class, "create_product"]) -> name("create_product");

// Enregistrer un produit
Route::post("store_product", [ProductController::class, "store_product"]) -> name("store_product");

// Page des catégories
Route::get("category", [ProductController::class, "category"]) -> name("category");

// Page de création de catégorie
Route::get("create_category", [ProductController::class, "create_category"]) -> name("create_category");

// Page de création de catégorie
Route::get("store_product", [ProductController::class, "store_product"]) -> name("store_product");

// Enregistrement d'une catégorie
Route::post("store_category", [ProductController::class, "store_category"]) -> name("store_category");

// Modification d'un produit
Route::get("edit_product/{id}", [ProductController::class, "edit_product"]) -> name("edit_product");

// Mise à jour des infos d'un produit
Route::post("update/{id}", [ProductController::class, "update"]) -> name("update");

// Suppression d'un produit
Route::get("delete/{id}", [ProductController::class, "delete"]) -> name("delete");

Auth::routes();

/***************************************************************************
**************************** END ROUTES (ADMIN) ****************************
***************************************************************************/
