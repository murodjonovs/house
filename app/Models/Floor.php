<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    use HasFactory;

    protected $fillable = [
        'building_id',
        'name_uz',
        'name_ru',
        'name_kr',
        'd',
        'photo',
        'view_box',
    ];

    public function building(){

        return $this->belongsTo(Building::class);
    }

    public function flats(){

        return $this->hasMany(Flat::class);
    }
}
