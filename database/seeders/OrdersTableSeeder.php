<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        // Create 10 product records
        for ($i = 0; $i < 10; $i++) {
            Order::create([
                'name' => $faker->name,
                'address' => $faker->address,
                'amount' => $faker->numberBetween(1000, 9000)
            ]);
        }
    }
}
