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
            "admin",
            "edit_product",
            "update",
            "delete"
        ]);
    }

    public function index() 
    {
        $product = Product::paginate(6);
        return view('home', ['products' => $product]);
    }

    public function sold() 
    {
        $products = DB::table('products')->where("condition", "=", "sold" )->paginate(6);
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
        $validatedData = $request->validate([
            "name" => 'required|min:5|max:100',
            "description" => 'required|max:255',
            //"size" => 'required',
            "reference" => 'required|min:16|max:16',
            "status" => 'required',
            "visibility" => 'required',
            "price" => 'required'
        ]);
        $products = Product::create($validatedData);
   
        return redirect('admin')->with('success', 'Le produit a bien été enregistré !');
    }

    // Route page création de catégorie
    public function create_category() 
    {
        return view("create_category");
    }

    // Route modification de produit
    public function edit_product($id)
    {
        $products = Product::findOrFail($id);
        return view('edit', compact('products'));
    }

    // Route update produit
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            "name" => 'required|min:5|max:100',
            "description" => 'required|max:255',
            //"size" => 'required',
            "reference" => 'required|min:16|max:16',
            "status" => 'required',
            "visibility" => 'required',
            "price" => 'required'
        ]);
        Product::whereId($id)->update($validatedData);
        return redirect('admin')->with('success', 'Le produit a bien été modifié !');
    }    

    // Route vers la suppression de la page 
    public function delete($id)
    {  
        $products = Product::findOrFail($id);
        $products->delete();
        return redirect('admin')->with('success', 'Le produit a bien été supprimé !');
    }
    
}
