<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Packeg extends Model
{
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

    	'country_id',
        'name',
    	'point',
    	'amount',
    	'description',

    ];


    public function Country(){

        return $this->belongsTo('App\Country');
        
    }
}
