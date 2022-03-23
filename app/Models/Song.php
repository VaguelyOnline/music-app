<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image'
    ];

    public function artists() {
        return $this->belongsToMany(Artist::class);
    }
}
