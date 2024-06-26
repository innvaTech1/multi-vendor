<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function countryStates(){
        return $this->hasMany(CountryState::class)->withDefault();
    }

    public function addressCountires(){
        return $this->hasMany(Address::class)->withDefault();
    }


    protected $fillable = [
        'name',
        'slug',
        'status'
    ];


}
