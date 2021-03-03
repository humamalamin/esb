<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sub_item_id' => 1,
            'no_transaction' => generateRandomString(4),
            'qty' => $this->faker->randomNumber(1),
            'amount' => $this->faker->randomNumber(1)
        ];
    }
}
