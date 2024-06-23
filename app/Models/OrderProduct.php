<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    public function seller(){
        return $this->belongsTo(Vendor::class,'seller_id')->withDefault();
    }

    public function orderProductVariants(){
        return $this->hasMany(OrderProductVariant::class)->withDefault();
    }

    public function order(){
        return $this->belongsTo(Order::class)->withDefault();
    }

}
