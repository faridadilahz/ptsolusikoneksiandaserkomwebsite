<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanans extends Model
{
    use HasFactory;

    protected $table = 'layanans';

    protected $fillable = [
        'namalayanan',
        'deskripsilayanan',
    ];
}
