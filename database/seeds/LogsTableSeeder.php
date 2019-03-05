<?php

use Illuminate\Database\Seeder;
use App\Log;
use Faker\Factory;

class LogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Log::create([
                'owner' => $faker->name,
                'device-type' => $faker->randomElement(array('Android', 'iPhone', 'Laptop', 'Tablet')),
                'log' => $faker->sentence,
                'resolved' => $faker->randomElement(array('Yes', 'No'))
            ]);
        }
    }
}
