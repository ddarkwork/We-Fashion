<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function __construct()
    {
        $this -> middleware("auth") -> except([
            "index",
            "sold",
            "showSex",
            "create_product",
            "products",
            "product",
            "store_product",
            "create_category",
            "admin",
            "edit_product",
            "update",
            "delete"
        ]);
    }

    // Page d'accueil
    public function index() 
    {
        $products = DB::table('products')->where("visibility", "=", "publié" )->orderBy('created_at', 'desc')->paginate(6);
        return view('home', ['products' => $products]);
    }

    // Voir les détails d'un produit
    public function product($id) 
    {
        $product = Product::findOrFail($id);
        return view('product', ['product' => $product]);
    }

    // Rubriques soldes
    public function sold() 
    {
        $products = DB::table('products')->where("condition", "=", "sold" )->orderBy('created_at', 'desc')->paginate(6);
        return view("sold", ['products' => $products]);
    }

    // Articles pour hommes ou femmes
    public function showSex(string $name){
        $category = Category::where('sex', $name)->get();
        $products = [];
        $sex = $name;
        if(count($category) > 0) {
            $products = $category[0]->products;
        }
        return view("index", ['products' => $products,'category' => $category, "sex" => $sex]);
    }

    // Page d'administration
    public function admin() {
        $products = DB::table('products')->orderBy('name', 'asc')->paginate(6);
        return view("dashboard", compact("products"));
    }

    // Page de création d'un nouveau produit 
    public function create_product()
    {
        return view("create_product");
    }

    // Enregistrer un nouveau produit
    public function store_product(Request $request)
    {
        $product = Product::create($request->all());
        dd($product);
        return redirect('admin')->with('success', 'Le produit a bien été enregistré');
    }

    // Page de création d'une nouvelle catégorie
    public function create_category() 
    {
        return view("create_category");
    }

    // Page de modification d'un produit
    public function edit_product($id)
    {
        $products = Product::findOrFail($id);
        return view('edit', compact('products'));
    }

    // Mise à jour des infos d'un produit
    public function update(Request $request, $id)
    {
        $products = Product::findOrFail($id);
        $products->update($request->all());
        return redirect('admin');
    }

    // Supprimer un produit
    public function delete($id)
    {  
        $products = Product::findOrFail($id);
        $products->delete();
        return redirect('admin')->with('success', 'Le produit a bien été supprimé !');
    }
    
}
