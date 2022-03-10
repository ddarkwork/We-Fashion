<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {
        $this -> middleware("auth") -> except([
            "index",
            "sales",
            "men",
            "women",
            "products",
            "create_product",
            "store_product",
            "admin"
        ]);
    }

    // Route home index
    public function index()
    {
        return view("/home");
    }

    // Route page soldes
    public function sales()
    {
        return view("/sales");
    }

    // Route page articles hommes
    public function men()
    {
        return view("/men");
    }

    // Route page articles femmes
    public function women()
    {
        return view("/women");
    }

    // Route page produit
    public function product()
    {
        return view("/product");
    }

    public function admin() {
        $products = Post::all();
        return view("/dashboard", ["products" => $products]);
    }

    // Route page création de produit
    public function create_product()
    {
        return view("/create_product");
    }

    // Route page traitement produit
    public function store_product(Request $request)
    {
        Product::create([
            "name" => $request -> name,
            "description" => $request -> description,
            "price" => $request -> price,
            "size" => $request->input('size'),
            "reference" => $request -> reference,
            "status" => $request -> status,
            "visibility" => $request -> visibility
        ]);
        dd("Votre article a bien été créé !");
    }
}
