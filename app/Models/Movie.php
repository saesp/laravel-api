<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'original_title',
        'code',
        'plot',
        'vote',
        'release_date',
    ];

    // many (movies) to many (genres)
    public function genres() {
        return $this -> belongsToMany(Genre :: class);
    }
    // many (movies) to many (tags)
    public function tags() {
        return $this -> belongsToMany(Tag :: class);
    }
}
