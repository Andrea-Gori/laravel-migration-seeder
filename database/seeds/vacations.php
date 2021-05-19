<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Vacation;

class vacations extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15 ; $i++) { 
            $vacations = new Vacation();
            $vacations->destination = $faker->state();
            $vacations->city = $faker->city();
            $vacations->price = $faker->randomFloat(2, 15000, 30000);
            $vacations->vacation_description = $faker->paragraph(2, true);
            $vacations->save();
        }
    }
}
