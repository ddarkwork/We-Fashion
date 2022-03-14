<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Factories\ProductFactory;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // variables du contexte
         $category1 = Category::where('sex', 'femme')->first();
         $category2 = Category::where('sex', 'homme')->first();
       
         Product::factory()
         ->count(10)
         ->create()
         ->each(function($product) use($category1, $category2){
            //  on va chercher avec random_int l'id pour la category homme et femme
             $id = random_int(0,1) == 1 ? 1 : 2;
            //  on fait l'association de product et category
             $product->categories()->attach([$id]);
 
             $product->save();
         });
    }
}



// $categoriesId = Category::all('id');
// $countCategory = count($categoriesId);
// $rand = random_int(2, 2);
// // On utilise la collection = méthodes Laravel pour traiter les entités comme des tableaux 
// // shuffle mélange le tableau d'entités, slice permet de découper de manière aléatoire ici
// $categoriesShuffle = $categoriesId->shuffle()->slice($rand);
// // Pour la méthode attach nous devons passer des ids sous forme d'un tableau
// $ids = [];
// foreach($categoriesShuffle as $k => $array){
//     $ids[] = $array["id"];
// }