<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $fillable = [
        'title',
        'tags',
        'category_id',
        'description',      // jika kamu simpan teks utama di kolom bernama 'content'
        'image',
        'penjelasan',
        'user_id',
    ];

    public function User(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function Category(){
        return $this->belongsTo(Categories::class,'category_id');
    }
}
