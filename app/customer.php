<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at','birthday'];

    public function pref()
    {
        return $this->belongsTo('App\Pref');
    }
}

