<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volume extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    // Membuat relasi one to one dari model Volume ke model Novel
    public function novel() {
        return $this->belongsTo(Novel::class);
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
