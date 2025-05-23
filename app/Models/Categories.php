<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function articles(){
        return $this->hasMany(articles::class);
    }
}
