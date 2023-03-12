<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    use HasFactory;

    protected $fillable = [
        'floor_id',
        'name_uz',
        'name_ru',
        'name_kr',
        'd',
        'photo',
        'room_count',
        'rooms',
        'long_area'
    ];

    protected $casts = [
        'rooms' => 'array'
    ];

    public function floor(){

        return $this->belongsTo(Floor::class, 'floor_id');
    }
}
