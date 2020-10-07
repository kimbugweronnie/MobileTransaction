<?php

namespace Database\Factories;

use App\Models\transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class transactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //return [
          return [

              'eWallet_name' => $this->faker->eWallet_name,
              'eWallet_phoneNumber' => $this->faker->eWallet_phoneNumber,
              'Transfer_Amount' => $this->faker->Transfer_Amount,

              'customer_phoneNumber' => $this->faker->customer_phoneNumber,
              'customers_id',=>$this->faker->customers_id,
              'eWalletaccounts_id'=>$this->faker->eWalletaccounts_id,
              'Status' => $this->faker->Status,




          ];
            //
        //];


    }
}
