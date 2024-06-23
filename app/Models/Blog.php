<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(BlogCategory::class,'blog_category_id')->withDefault();
    }

    public function admin(){
        return $this->belongsTo(Admin::class)->withDefault();
    }

    public function comments(){
        return $this->hasMany(BlogComment::class)->withDefault();
    }

    public function activeComments(){
        return $this->hasMany(BlogComment::class)->where('status',1)->withDefault();
    }



}
