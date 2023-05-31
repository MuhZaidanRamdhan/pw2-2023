<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'movie_id' => 1 ,
            'user' => ' Muh Fadhillah',
            'rating' => 9.8,
            'review' => 'Keren banget!',
            'tanggal' => '22-10-2022',
        ]);

        Review::create([
            'movie_id' => 2 ,
            'user' => 'Rian Satria',
            'rating' => 9.1,
            'review' => 'filmnya bikin sedih banget!',
            'tanggal' => '16-12-2022',
        ]);

        Review::create([
            'movie_id' => 3 ,
            'user' => 'Fikri Maulana',
            'rating' => 9.4,
            'review' => 'Keren banget! ga sabar nunggu lanjutannya!',
            'tanggal' => '12-04-2022',
        ]);

        Review::create([
            'movie_id' => 4 ,
            'user' => 'Nanda Putra',
            'rating' => 9.1,
            'review' => 'Lucu banget, recomended buat ditonton!',
            'tanggal' => '02-01-2019',
        ]);

        Review::create([
            'movie_id' => 5 ,
            'user' => 'Dinda Maulidia',
            'rating' => 9.6,
            'review' => 'Kelincinya gemes banget, suka suka suka!',
            'tanggal' => '02-01-2019',
        ]);
        
    }
}
