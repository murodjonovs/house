<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'name_uz',
        'name_ru',
        'name_kr',
        'd',
        'photo',
        'view_box',
    ];


    public function project(){

        return $this->belongsTo(Project::class);
    }

    public function floors(){

        return $this->hasMany(Floor::class);
    }
}
