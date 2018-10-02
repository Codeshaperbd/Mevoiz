<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupportsFAQ extends Model
{
    //
    protected $table = 'supports_faq';
    protected $fillable = [
        'title',
        'description'
    ];
}
