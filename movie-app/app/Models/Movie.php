<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'no' => 1,
            'judul' => 'The Shawshank Redemption',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'USA',
            'tahun' => 1994,
            'rating' => 9.8,
        ],
        [
            'no' => 2,
            'judul' => 'Avengers:Endgame',
            'poster' => 'image.png',
            'genre' => 'Action',
            'negara' => 'USA',
            'tahun' => 2019,
            'rating' => 9.0,
        ],
        [
            'no' => 3,
            'judul' => 'The Godfather',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'USA',
            'tahun' => 1972,
            'rating' => 8.9,
        ],
        [
            'no' => 4,
            'judul' => 'Miracle On Cell 7',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'Indonesia',
            'tahun' => 2021,
            'rating' => 8.8,
        ],
        [
            'no' => 5,
            'judul' => 'FAST X',
            'poster' => 'image.png',
            'genre' => 'Action',
            'negara' => 'USA',
            'tahun' => 2023,
            'rating' => 9.9,
        ],
        
    ];

    public function getAllMovies()
    {
        return $this->movies;
    }
}
