<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreNovel extends Model
{
    use HasFactory;

    // Menghubungkan table genre_novel ke model GenreNovel 
    protected $table = 'genre_novel';
}
