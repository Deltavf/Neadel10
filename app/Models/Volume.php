<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volume extends Model
{
    use HasFactory;

    // Membuat relasi one to one dari model Volume ke model Novel
    public function novel() {
        return $this->belongsTo(Novel::class);
    }
}
