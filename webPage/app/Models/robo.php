<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class robo extends Model
{
    use HasFactory;
    protected $fillable = [
        'cow',
        'cat',
    ];
}
