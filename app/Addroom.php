<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addroom extends Model
{
    protected $fillable = [
        'name', 'description','view', 'occupancy', 'size', 'type', 'img1', 'img2', 'img3', 'img4', 'original_price', 'best_price',
    ];

    protected $table = 'rooms';
}
