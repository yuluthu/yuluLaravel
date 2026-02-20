<?php

namespace App;

use Database\Factories\TeamFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[HasFactory]
class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';

    protected $fillable = ['name', 'clubId'];

    protected static function newFactory()
    {
        return TeamFactory::new();
    }

    public function club(): BelongsTo
    {
        return $this->belongsTo(Club::class, 'clubId');
    }
}
