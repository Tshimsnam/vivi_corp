<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'lastname',
        'name',
        'fonction',
        'facebook',
        'tweeter',
        'linkedin',
        'whathsapp',
    ];
}
