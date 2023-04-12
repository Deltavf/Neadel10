<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeNovel extends Model
{
    use HasFactory;

    protected $table = 'like_novel';

    protected $guarded = ['id'];
}
