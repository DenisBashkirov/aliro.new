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

    public function menu_item()
    {
        return $this->belongsTo('App\NavMenuItem', 'menu_item_id', 'id');
    }

    public function page()
    {
        return $this->belongsTo('App\Page', 'page_id', 'id');
    }
}
