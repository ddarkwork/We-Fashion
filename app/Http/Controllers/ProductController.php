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
            //"men",
            //"women",
            "create_product",
            "products",
            "store_product",
            "create_category",
            "admin"
        ]);
    }

    public function index() {
        $product = Product::paginate(6);
        return view('home', ['products' => $product]);
    }

    public function showSex(string $name){
        $category = Category::where('sex', $name)->get();
        $products = [];
        $sex = $name;
        // Pour récuperez le premier id de chaque categorie.
        if(count($category) > 0) {
            $products = $category[0]->products;
        }
        return view("index", ['products' => $products,'category' => $category, "sex" => $sex]);
    }

    // Route page produit
    // public function products()
    // {
    //     return view("product");
    // }

    public function admin() {
        // $products = Product::orderBy("name")->get();
        $products = DB::table('products')->orderBy('name', 'asc')->paginate(6);
        return view("dashboard", compact("products"));
    }

    // Route page création de produit
    public function create_product()
    {
        $products = Product::all();
        return view("create_product", compact("products"));
    }

    // Route page traitement produit
    public function store_product(Request $request)
    {
        $products = Product::create([
            "name" => $request->name,
            "description" => $request->description,
            //"size" => $request->size,
            "reference" => $request->reference,
            "status" => $request->status,
            "visibility" => $request->visibility,
            "price" => $request->price
        ]);

        $validatedData = $request->validate([
            "name" => $request->name,
            "description" => $request->description,
            //"size" => $request->size,
            "reference" => $request->reference,
            "status" => $request->status,
            "visibility" => $request->visibility,
            "price" => $request->price
        ]);
        $show = Product::create($validatedData);
   
        return redirect('admin')->with('success', 'Le produit a bien été enregistré !');
    }

    // Route page création de catégorie
    public function create_category() 
    {
        return view("create_category");
    }

    // Route modification de produit
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('edit', compact('products'));
    }

    // Route update produit
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            "name" => $request->name,
            "description" => $request->description,
            //"size" => $request->size,
            "reference" => $request->reference,
            "status" => $request->status,
            "visibility" => $request->visibility,
            "price" => $request->price
        ]);
        Product::whereId($id)->update($validatedData);
        return redirect('admin')->with('success', 'Le produit a bien été modifié !');
    }    
    
}
