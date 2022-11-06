<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeatherValue extends Model
{
    use HasFactory;

    protected $fillable = ['station', 'variable', 'value'];
}
