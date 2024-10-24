<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    // Jika Anda ingin menentukan kolom yang dapat diisi
    protected $fillable = [
        'email',
    ];

    // Jika Anda memiliki pengaturan tambahan, tambahkan di sini
}
