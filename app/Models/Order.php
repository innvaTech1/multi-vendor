<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    public function user(){
        return $this->belongsTo(User::class)->withDefault();
    }

    public function orderProducts(){
        return $this->hasMany(OrderProduct::class)->withDefault();
    }

    public function orderAddress(){
        return $this->hasOne(OrderAddress::class)->withDefault();
    }

    public function deliveryman(){
        return $this->belongsTo(DeliveryMan::class, 'delivery_man_id', 'id')->withDefault();
    }
}
