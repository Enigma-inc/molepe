<?php

use App\Section;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SectionsTableSeeder extends Seeder
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
            Section::create([
                'name' => 'Section '.$index
            ]);
        }
    }
}
