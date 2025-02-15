<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{

    use HasFactory, SoftDeletes;

    protected $fiallable = [
        'title',
        'lowest_price',
        'lowest_price_date',
        'image_url'
    ];

    protected $casts = [
        'lowest_price_date' => 'datetime'
    ];


}
