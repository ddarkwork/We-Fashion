<?php

namespace App\Http\Controllers;

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
        return view("/dashboard");
    }

    // Route page création de produit
    public function create_product()
    {
        return view("/create_product");
    }
}
