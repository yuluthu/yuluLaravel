<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Team;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Team>
 */
class TeamFactory extends Factory
{
    protected $model = Team::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => '',
            'clubId' => null,
        ];
    }
}
