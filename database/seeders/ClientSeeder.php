<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i=0; $i < 20 ; $i++) {
            DB::table('clients')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->safeEmail,
                'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'profile_image' => $faker->image('storage/app/public/clients',640,480, null, false),
                'case_details' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'created_at' => $faker->dateTime($max = 'now'),

            ]);
        }
    }
}
