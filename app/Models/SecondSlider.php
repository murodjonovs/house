<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondSlider extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'slider_number',
    ];
}
