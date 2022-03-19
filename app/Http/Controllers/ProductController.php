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

    public function index() 
    {
        $products = DB::table('products')->where("visibility", "=", "publié" )->orderBy('created_at', 'desc')->paginate(6);
        //$product = Product::paginate(6);
        return view('home', ['products' => $products]);
    }

    public function product($id) 
    {
        $product = Product::findOrFail($id);
        return view('product', ['product' => $product]);
    }

    public function sold() 
    {
        $products = DB::table('products')->where("condition", "=", "sold" )->orderBy('created_at', 'desc')->paginate(6);
        return view("sold", ['products' => $products]);
    }

    public function showSex(string $name){
        $category = Category::where('sex', $name)->get();
        $products = [];
        $sex = $name;
        if(count($category) > 0) {
            $products = $category[0]->products;
        }
        return view("index", ['products' => $products,'category' => $category, "sex" => $sex]);
    }

    public function admin() {
        $products = DB::table('products')->orderBy('name', 'asc')->paginate(6);
        return view("dashboard", compact("products"));
    }

    public function create_product()
    {
        return view("create_product");
    }

    // public function store_product(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         "name" => 'required|min:5|max:100',
    //         "description" => 'required|max:255',
    //         //"size" => 'required',
    //         "reference" => 'required|min:16|max:16',
    //         "status" => 'required',
    //         "visibility" => 'required',
    //         "price" => 'required'
    //     ]);
    //     $products = Product::create($validatedData);
   
    //     return redirect('admin')->with('success', 'Le produit a bien été enregistré !');
    // }

    // public function store_product(Request $request)
    // {
    //     $product = Product::create($request->all());
    //     return $product;
    // }

    public function store_product(Request $request)
    {
        $product = Product::create($request->all());
        dd($product);
        return redirect('admin')->with('success', 'Le produit a bien été enregistré');
    }

    public function create_category() 
    {
        return view("create_category");
    }

    public function edit_product($id)
    {
        $products = Product::findOrFail($id);
        return view('edit', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $products = Product::findOrFail($id);
        $products->update($request->all());
        return redirect('admin');
    }

    public function delete($id)
    {  
        $products = Product::findOrFail($id);
        $products->delete();
        return redirect('admin')->with('success', 'Le produit a bien été supprimé !');
    }
    
}
