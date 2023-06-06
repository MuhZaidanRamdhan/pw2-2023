<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'poster', 'genre_id', 'negara', 'tahun', 'rating'];

    public function genre() 
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }
}
