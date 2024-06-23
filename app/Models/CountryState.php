<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryState extends Model
{
    use HasFactory;

    public function country(){
        return $this->belongsTo(Country::class)->withDefault();
    }

    public function cities(){
        return $this->hasMany(City::class)->withDefault();
    }

    public function addressStates(){
        return $this->hasMany(Address::class,'state_id')->withDefault();
    }


    protected $fillable = [
        'country_id',
        'name',
        'slug',
        'status'
    ];
}
