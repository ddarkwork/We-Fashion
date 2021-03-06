<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    // Autoriser le passage de données 
    protected $fillable = ["category"];

    // Lier les tables Products et Categories
    public function products() {
        return $this->belongsToMany(Product::class);
    }
}
