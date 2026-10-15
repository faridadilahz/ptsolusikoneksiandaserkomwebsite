<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesans extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'email',
        'pesan',
        'status',
    ];
}
