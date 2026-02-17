<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    protected $table = "salones";
    public $timestamps = false;
    protected $fillable = [
        "name",
        "capacidad",
        "description",
        "ubicacion",
    ];
}
