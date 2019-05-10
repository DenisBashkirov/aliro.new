<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PvcProfile extends Model
{
    public function category()
    {
        return $this->belongsTo('App\PvcProfileCategory');
    }
}
