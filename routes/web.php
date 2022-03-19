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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [ProductController::class, 'index'])->name('home');

Route::get('products', [ProductController::class, 'index'])->name('sold');

Route::get('sex/{name}', [ProductController::class, 'showSex'])->name('sex');

Route::get('sold', [ProductController::class, 'sold'])->name('sold');

/***************************************************************************
**************************** END ROUTES (USERS) ****************************
***************************************************************************/



/***************************************************************************
*************************** BEGIN ROUTES (ADMIN) ***************************
***************************************************************************/

// Route vers le dashborad auth
Route::get("admin", [ProductController::class, "admin"]) -> name("admin");

require __DIR__.'/auth.php';

// Route vers la page de création d'un nouveau produit
Route::get("create_product", [ProductController::class, "create_product"]) -> name("create_product");

// Route vers la page de traitement produits (users)
Route::post("store_product", [ProductController::class, "store_product"]) -> name("store_product");

// Route vers la page de création de catégorie produit
Route::get("create_category", [ProductController::class, "create_category"]) -> name("create_category");

// Route vers la page de création de catégorie produit
Route::post("store_category", [ProductController::class, "store_category"]) -> name("store_category");

// Route vers la page de modification de produit
Route::get("edit_product/{id}", [ProductController::class, "edit_product"]) -> name("edit_product");

// Route vers le traitement de la page de modification de produit
Route::patch("update/{id}", [ProductController::class, "update"]) -> name("update");

// Route vers le traitement de la page de suppression de produit
Route::get("delete/{id}", [ProductController::class, "delete"]) -> name("delete");

// Route vers la page de traitement de la modification de produit
//Route::post("edit_product", [ProductController::class, "edit_product"]) -> name("edit_product");

/***************************************************************************
**************************** END ROUTES (ADMIN) ****************************
***************************************************************************/

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
