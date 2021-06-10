<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'doctor_id', 'name_user', 'surname_user', 'mail_user', 'message_user'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
