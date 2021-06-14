<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdvertiseDoctor extends Model
{
    protected $table = 'advertise_doctor';

    protected $fillable = ['advertise_id', 'doctor_id', 'payment_status', 'start_ads_date', 'end_ads_date'];


    public function users()
    {
    return $this->belongsTo('App\User');
    }

    public function advertises()
    {
    return $this->belongsTo('App\Advertise');
    }

}


