<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PvcProfileCategory extends Model
{
    public function profiles()
    {
        return $this->hasMany('App\PvcProfile', 'category_id', 'id')->orderBy('ordering');
    }
}
