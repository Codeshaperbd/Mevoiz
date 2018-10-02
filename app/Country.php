<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use Searchable;

	use Sluggable;

	/**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    //
    protected $fillable = [

    	'name',
    	'flag',
        'countryCode',
        'prefix'
    
    ];


    public function searchableAs()
    {
        return 'name';
    }


    //setup relation with photo model
    public function photo(){
        return $this->belongsTo('App\Photo');
    }

    public function Packeg(){

        return $this->hasMany('App\Packeg');

    }

    public function CountryBanner(){

        return $this->hasOne('App\CountryBanner');

    }

    public function LocalPayment(){

        return $this->hasMany('App\LocalPayment');

    }


}
