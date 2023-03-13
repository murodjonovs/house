<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainSlider extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_uz',
        'name_ru',
        'name_kr',
        'photo',
        'parametrs',
    ];

    protected $casts = [
        'parametrs' => 'array'
    ];
}
