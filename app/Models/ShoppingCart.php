<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;

    public function variants(){
        return $this->hasMany(ShoppingCartVariant::class, 'shopping_cart_id')->withDefault();
    }

    public function product(){
        return $this->belongsTo(Product::class)->select(['id','name','short_name','price','offer_price','thumb_image','slug','weight'])->withDefault();
    }

    public function card_product(){
        return $this->belongsTo(Product::class,'product_id','id')->withDefault();
    }


}
