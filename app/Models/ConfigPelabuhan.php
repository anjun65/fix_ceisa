<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigPelabuhan extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
    ];
}
