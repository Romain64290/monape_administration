<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    public function users() 
        {
         return $this->hasMany('User');
        }
}
