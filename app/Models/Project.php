<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'view_box',
    ];

    public function buildings(){

        return $this->hasMany(Building::class);
    }
}
