<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pref extends Model
{
    protected $guarded = ['id'];

    protected $dates = ['created_at', 'updated_at'];

    /**
     * Undocumented function
     *
     * @return void
     */
    public function pref()
    {
        return $this->belongsTo('App\Pref');
    }
}
