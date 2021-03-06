<?php

namespace App\Models;

use App\Models\Picture;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    // Autoriser le passage de données 
    protected $fillable = ["name", "description", "price", "size", "reference", "condition", "visibility"];

    // Lier les tables Products et Categories
    public function categories() 
    {
        return $this->belongsToMany(Category::class);
    }

    // Lier les tables Products et Picture
    public function picture()
    {
        return $this->hasOne(Picture::class);
    }

    public function setSizeAttribute($value)
    {
        $this->attributes['size'] = json_encode($value);
    }

    public function getSizeAttribute($value)
    {
        return $this->attributes['size'] = json_decode($value);
    }
}
