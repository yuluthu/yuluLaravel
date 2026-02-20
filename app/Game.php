<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\GameFactory;

#[HasFactory]
class Game extends Model
{
    use HasFactory;

    protected $table = 'games';
    //
}
