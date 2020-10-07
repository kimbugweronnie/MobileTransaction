<?php

namespace Database\Factories;

use App\Models\eWalletAccount;
use Illuminate\Database\Eloquent\Factories\Factory;

class eWalletAccountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = eWalletAccount::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

          return [
              'name' => $this->faker->name,
              'phoneNumber' => $this->faker->unique(),
              'Balance' => $this->faker->Balance,
              'pin' => $this->faker->pin->unique(),
              //now()

          ];
            //

    }
}
