<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class)->withDefault();
    }

    public function childCategories(){
        return $this->hasMany(ChildCategory::class,'sub_category_id')->withDefault();
    }

    public function activeChildCategories(){
        return $this->hasMany(ChildCategory::class,'sub_category_id')->withDefault()->where('status',1)->select(['id','name','slug','sub_category_id']);
    }

    public function products(){
        return $this->hasMany(Product::class)->withDefault();
    }
}
