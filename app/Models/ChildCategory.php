<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildCategory extends Model
{
    use HasFactory;

    public function subCategory(){
        return $this->belongsTo(SubCategory::class)->withDefault();
    }

    public function category(){
        return $this->belongsTo(Category::class)->withDefault();
    }

    public function products(){
        return $this->hasMany(Product::class)->withDefault();
    }

}
