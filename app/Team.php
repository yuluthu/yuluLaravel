<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\TeamFactory;

#[HasFactory]
class Team extends Model
{
    protected $table = 'teams';
    //
}
