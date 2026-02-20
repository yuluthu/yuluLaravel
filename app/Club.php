<?php

namespace App;

use Database\Factories\ClubFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[HasFactory]
class Club extends Model
{
    use HasFactory;

    protected $table = 'clubs';

    protected $fillable = ['name', 'clubType', 'active'];

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory()
    {
        return ClubFactory::new();
    }

    public function teams(): HasMany
    {
        return $this->hasMany(Team::class, 'clubId');
    }
}
