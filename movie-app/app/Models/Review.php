<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['movie_id', 'user', 'rating', 'review','tanggal'];

    public function movie() 
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }
}
