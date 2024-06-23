<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;


    protected $appends = ['averageRating'];

    public function getAverageRatingAttribute()
    {
        return $this->activeReviews()->avg('rating') ? : '0';
    }

    public function socialLinks(){
        return $this->hasMany(VendorSocialLink::class)->withDefault();
    }

    public function user(){
        return $this->belongsTo(User::class)->withDefault();
    }

    public function products(){
        return $this->hasMany(Product::class,'vendor_id')->withDefault();
    }

    public function activeReviews(){
        return $this->hasMany(ProductReview::class,'product_vendor_id')->withDefault();
    }


}
