<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category;
        $category->name = Str::random(10);
        $category->description = Str::random(30);
        $category->sex = random_int(0,1) ? "homme" : "femme";
        $category->save();


        $category = new Category;
        $category->name = Str::random(10);
        $category->description = Str::random(30);
        $category->sex = random_int(0,1) ? "homme" : "femme";
        $category->save();

    }
}