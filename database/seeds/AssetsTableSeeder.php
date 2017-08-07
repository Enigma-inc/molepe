<?php

use App\Asset;
use App\AssetGroup;
use App\Coordinates;
use App\Zone;
use App\AssetSubclass;
use App\Location;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Faker\Provider\Barcode;

class AssetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Faker::create();
        $fake->addProvider(new Barcode($fake));

        $classIds=AssetSubclass::all('id')->pluck('id');
        $locationIds=location::all('id')->pluck('id');
        $zoneIds=Zone::all('id')->pluck('id');
        $functionalGroups= AssetGroup::all('id')->pluck('id');



        foreach(range(1,200) as $index)
        {
            Asset::create( [
                'asset_number'=>$fake->ean13,
                'description'=>$fake->sentence(10),
                'dimensions'=>$fake->sentence(5),
                'construction'=>$fake->sentence(6),
                'specific_identifiers'=>$fake->word,
                'class_id'=>$fake->randomElement($classIds->toArray()),
                'location_id'=>$fake->randomElement($locationIds->toArray()),
                'zone_id'=>$fake->randomElement($zoneIds->toArray()),
                'functional_group_id'=>$fake->randomElement($functionalGroups->toArray())
                
            ]);
        }
    }
}
