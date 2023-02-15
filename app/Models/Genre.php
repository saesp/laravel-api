<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
    ];

    // many (genres) to many (movies)
    public function movies() {
        return $this -> belongsToMany(Movie :: class);
    }
}
