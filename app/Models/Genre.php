<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    // Membuat relasi many to many dari model Genre ke model Novel
    public function novels() {
        return $this->belongsToMany(Novel::class);
    }
}
