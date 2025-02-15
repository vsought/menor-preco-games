<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PhpParser\Builder\Use_;

class Whishlist extends Model
{
    use HasFactory, SoftDeletes;

    protected $fiallable = [
        'user_id',
        'game_id',
        'added_at',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function games() {
        return $this->hasMany(Game::class);
    }
}
