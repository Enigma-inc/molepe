<?php

use App\Location;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake=Faker::create();

        foreach (range(1, 10) as $index) {
            Location::create([
                'name'=>'Location '.$index,
                'description'=>$fake->sentence(10)
            ]);
        }

    }
}
