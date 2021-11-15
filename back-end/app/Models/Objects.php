<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objects extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'street',
        'place',
        'zipcode',
        'region',
        'housenumber',
        'rooms',
        'bedrooms',
        'building_date',
        'placement',
        'surface',
        'type',
        'date',
        'sold',
        'price',
        'created_at',
        'updated_at',
    ];
}
