<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikels extends Model
{
    use HasFactory;

    protected $table = 'artikels';

    protected $fillable = [
        'gambarartikel',
        'judulartikel',
        'deskripsiartikel',
    ];
}
