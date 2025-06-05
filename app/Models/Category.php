<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories'; // Sesuaikan dengan nama tabel di database kamu

    protected $fillable = [
        'name', // kolom pada tabel categories
        'description',
    ];

    // Relasi ke model Articles
    public function articles()
    {
        return $this->hasMany(Articles::class);
    }
}
