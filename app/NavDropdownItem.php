<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NavDropdownItem extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function children()
    {
        return $this->hasMany('App\NavDropdownItem', 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo('App\NavDropdownItem', 'parent_id', 'id');
    }
}
