<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    // many (tags) to many (movies)
    public function movies() {
        return $this -> belongsToMany(Movie :: class);
    }
}
