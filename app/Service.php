<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable = [
        'user_id',
        'house_id',
        'payment_id'
    ];
    
    public function house() {
        return $this->belongsTo('App\House');
    }
    public function user() {
        return $this->belongsTo('App\User');
    }
    
    public function payment() {
        return $this->hasOne('App\Payment');
    }
}
