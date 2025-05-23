<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    public function User(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function Category(){
        return $this->belongsTo(categories::class,'category_id');
    }
}

