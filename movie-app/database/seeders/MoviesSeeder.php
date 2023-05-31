<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'judul' => 'Avenger:Endgame',
            'poster' => 'image.png',
            'genre_id' => 1,
            'negara' => 'USA',
            'tahun' => 2021,
            'rating' => 9.8,
        ]);

        Movie::create([
            'judul' => 'Miracle On Cell 7',
            'poster' => 'image.png',
            'genre_id' => 3,
            'negara' => 'Indonesia',
            'tahun' => 2021,
            'rating' => 9.6,
        ]);

        Movie::create([
            'judul' => 'Fast X',
            'poster' => 'image.png',
            'genre_id' => 1,
            'negara' => 'USA',
            'tahun' => 2023,
            'rating' => 9.4,
        ]);

        Movie::create([
            'judul' => 'The Secret of Life Pets',
            'poster' => 'image.png',
            'genre_id' => 2,
            'negara' => 'USA',
            'tahun' => 2016,
            'rating' => 9.4,
        ]);
        Movie::create([
            'judul' => 'The Secret of Life Pets 2',
            'poster' => 'image.png',
            'genre_id' => 2,
            'negara' => 'USA',
            'tahun' => 2019,
            'rating' => 9.8,
        ]);
    }
}
