<?php

namespace Database\Factories;

use App\Models\Character;
use App\Models\Comic;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComicFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comic::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $characters = Character::pluck('id')->toArray();
        return [
            'name' => $this->faker->domainName(),
            'character_id' => $this->faker->randomElement($characters)
        ];
    }
}
