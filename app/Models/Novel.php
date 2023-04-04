<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    use HasFactory;

    // Membuat relasi many to many dari model Novel ke model Genre
    public function genres() {
        return $this->belongsToMany(Genre::class);
    }

    // Membuat relasi one to many dari model Novel ke model User
    public function user() {
        return $this->belongsTo(User::class);
    }

    // Membuat relasi one to many dari model Novel ke model Volume
    public function volumes() {
        return $this->hasMany(Volume::class);
    }
}
