<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'no' => 1,
            'film' => 'The Shawshank Redemption',
            'user' => ' Muh Fadhillah',
            'rating' => '9.8',
            'review' => 'Keren banget!',
            'tanggal' => '22-10-2022',
        ],
        [
            'no' => 2,
            'film' => 'Miracle On Cell 7',
            'user' => 'Rian Satria',
            'rating' => '9.1',
            'review' => 'filmnya bikin sedih banget!',
            'tanggal' => '16-12-2022',
        ],
        [
            'no' => 3,
            'film' => 'FAST X',
            'user' => 'Fikri Maulana',
            'rating' => '9.5',
            'review' => 'Keren banget!',
            'tanggal' => '12-04-2022',
        ],
        [
            'no' => 4,
            'film' => 'The Godfather',
            'user' => 'Nanda Putra',
            'rating' => '9.3',
            'review' => 'Speechless!',
            'tanggal' => '28-10-2021',
        ],
        [
            'no' => 5,
            'film' => 'Avenger:Endgame',
            'user' => 'Dinda Maulidia',
            'rating' => '9.1',
            'review' => 'Keren banget, recomended buat ditonton!',
            'tanggal' => '02-01-2021',
        ],
        
    ];

    public function getAllReviews() {
        return $this->reviews;
    }
}
