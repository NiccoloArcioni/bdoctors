<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertise extends Model
{
    protected $fillable = [
        'type', 
        'price',
        'hours'
    ];


    public function advertises_doctors()
    {
    return $this->hasMany('App\AdvertiseDoctor');
    }
}
