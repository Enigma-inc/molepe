<?php

use App\Zone;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ZonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake=Faker::create();

        foreach (range(1,5) as $index) {

            Zone::create([
                'name'=>'Zone '.$index,
                'description'=>$fake->sentence(10)
            ]);
        }
    }
}