<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

    public function variantItems(){
        return $this->hasMany(ProductVariantItem::class)->withDefault();
    }

    public function activeVariantItems(){
        return $this->hasMany(ProductVariantItem::class)->withDefault()->select(['product_variant_id','name','price','id']);
    }


}
