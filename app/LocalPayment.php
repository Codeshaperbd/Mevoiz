<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocalPayment extends Model
{    //
    protected $fillable = [

    	'country_id',
    	'details'
    
    ];

   
    public function Country(){

        return $this->belongsTo('App\Country');
        
    }
}
