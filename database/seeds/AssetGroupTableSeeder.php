<?php

use App\AssetGroup;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


class AssetGroupTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();


        foreach(range(1,5) as $index)
        {
            AssetGroup::create([
                'name'=>'Asset Group '.$index,
                'description'=>$faker->sentence(10),
            ]);
        }
    }
}