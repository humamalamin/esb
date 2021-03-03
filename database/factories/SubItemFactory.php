<?php

namespace Database\Factories;

use App\Models\SubItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SubItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'item_id' => 1,
            'name' => $this->faker->name,
            'stock' => $this->faker->randomNumber(1),
            'price' => $this->faker->randomNumber(1)
        ];
    }
}
