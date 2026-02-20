<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\ClubFactory;

#[HasFactory]
class Club extends Model
{
    use HasFactory;
    
    protected $table = 'clubs';

    protected $fillable = ['name', 'clubType'];
    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory()
    {
        return ClubFactory::new();
    }

}
