<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountryBanner extends Model
{
    //
    protected $fillable = [

    	'country_id',
    	'banner'
    
    ];

    public function Country(){

        return $this->belongsTo('App\Country');
        
    }
}
