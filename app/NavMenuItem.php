<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NavMenuItem extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function page()
    {
        return $this->belongsTo('App\Page', 'page_id', 'id');
    }
}