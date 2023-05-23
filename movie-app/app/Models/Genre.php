<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'no' => 1,
            'genre' => 'Action',
            'deskripsi' => 'beberapa tokohnya terlibat dalam tantangan yang memerlukan kekuatan fisik ataupun kemampuan khusus. ',
        ],
        [
            'no' => 2,
            'genre' => 'Thriller',
            'deskripsi' => 'sebuah genre sastra, film, dan acara televisi yang memiliki banyak subtipe di dalamnya.',
        ],
        [
            'no' => 3,
            'genre' => 'Comedy',
            'deskripsi' => 'suatu karya yang lucu yang pada umumnya bertujuan untuk menghibur, menimbulkan tawa, terutama di televisi, film, dan lawakan.',
        ],
        [
            'no' => 4,
            'genre' => 'Sci-Fi',
            'deskripsi' => 'suatu bentuk fiksi spekulatif yang terutama membahas tentang pengaruh sains dan teknologi yang diimajinasikan.',
        ],
        [
            'no' => 5,
            'genre' => 'Drama',
            'deskripsi' => 'Drama menggambarkan realita kehidupan, watak, serta tingkah laku manusia melalui peran dan dialog yang dipentaskan',
        ],
        
    ];

    public function getAllGenres() {

        return $this-> genres;
    }
}
