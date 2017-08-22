<?php

use App\CostCenter;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CostCentersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Faker::create();

        foreach(range(1, 5) as $index){
            CostCenter::create([
                'name' => 'Cost Center '.$index
            ]);
        }
    }
}