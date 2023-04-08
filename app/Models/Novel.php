<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Novel extends Model
{
    use HasFactory, Sluggable;

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

    // Agar mengubah route resource yang berdasarkan id menjadi berdasarkan slug
    public function getRouteKeyName() {
        return 'slug';
    }

    // Untuk membuat slug dari field judul
    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
