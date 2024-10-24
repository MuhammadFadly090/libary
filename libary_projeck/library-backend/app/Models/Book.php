<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Daftar atribut yang bisa diisi (fillable)
    protected $fillable = [
        'title',
        'author',
        'year',
        'description',
    ];
}
