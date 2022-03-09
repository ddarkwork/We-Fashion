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

// Route vers la page d'accueil (users)
Route::get("/", [ProductController::class, "index"]) -> name("home");

// Route vers la page soldes (users)
Route::get("/sales", [ProductController::class, "sales"]) -> name("sales");

// Route vers la page Homme (users)
Route::get("/men", [ProductController::class, "men"]) -> name("men");

// Route vers la page Femme (users)
Route::get("/women", [ProductController::class, "women"]) -> name("women");

// Route vers la page détails produits (users)
Route::get("/product", [ProductController::class, "product"]) -> name("product");

/***************************************************************************
**************************** END ROUTES (USERS) ****************************
***************************************************************************/



/***************************************************************************
*************************** BEGIN ROUTES (ADMIN) ***************************
***************************************************************************/

// Route vers le dashborad auth
Route::get("/admin", [ProductController::class, "admin"]) -> name("admin");

require __DIR__.'/auth.php';

// Route vers la page de création d'un nouveau produit
Route::get("/create_product", [ProductController::class, "create_product"]) -> name("create_product");

/***************************************************************************
**************************** END ROUTES (ADMIN) ****************************
***************************************************************************/
