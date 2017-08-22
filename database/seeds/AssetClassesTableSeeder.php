<?php
use App\AssetClass;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class AssetClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

       foreach(range(1,20) as $index)
        {
             AssetClass::create([
                'name'=>'Asset Class '.$index,
                'description'=>$faker->sentence(10),
            ]);
        }

        AssetClass::create( [
            'name'=>'LAND'
        ] );



        AssetClass::create( [
            'name'=>'BUILDINGS-DWELLINGS'
        ] );

        AssetClass::create( [
            'name'=>'BUILDINGS-NON RESIDENTIAL DWELLINGS'
        ] );

        AssetClass::create( [
            'name'=>'INFRASTRUCTURE ASSETS-ELECTRICITY'
        ] );

        AssetClass::create( [
            'name'=>'INFRASTRUCTURE ASSETS-ROADS-BRIDGES'
        ] );

        AssetClass::create( [
            'name'=>'INFRASTRUCTURE ASSETS-ROADS-STORM WATER'
        ] );

       AssetClass::create( [
            'name'=>'INFRASTRUCTURE ASSETS-ROADS'
        ] );

       AssetClass::create( [
            'name'=>'INFRASTRUCTURE ASSETS-AIRPORTS'
        ] );

       AssetClass::create( [
            'name'=>'INFRASTRUCTURE ASSETS-WATER'
        ] );

       AssetClass::create( [
            'name'=>'INFRASTRUCTURE ASSETS-SEWERAGE'
        ] );

        AssetClass::create( [
            'name'=>'INFRASTRUCTURE ASSETS-SOLID WASTE DISPOSAL'
        ] );

        AssetClass::create( [
            'name'=>'INFRASTRUCTURE ASSETS-RAILWAYS'
        ] );

        AssetClass::create( [
            'name'=>'INFRASTRUCTURE ASSETS-GAS SUPPLY SYSTEMS'
        ] );

        AssetClass::create( [
            'name'=>'CAPITAL/INFRASTRUCTURE IN PROGRESS'
        ] );

        AssetClass::create( [
            'name'=>'MACHINERY AND EQUIPMENT'
        ] );

        AssetClass::create( [
            'name'=>'FURNITURE AND OFFICE EQUIPMENT'
        ] );

        AssetClass::create( [
            'name'=>'COMPUTER EQUIPMENT'
        ] );

        AssetClass::create( [
            'name'=>'TRANSPORT ASSETS'
        ] );

        AssetClass::create( [
            'name'=>'HERITAGE ASSETS'
        ] );

        AssetClass::create( [
            'name'=>'BIOLOGICAL OR CULTIVATED ASSETS'
        ] );

        AssetClass::create( [
            'name'=>'INVESTMENT PROPERTY'
        ] );

        AssetClass::create( [
            'name'=>'INTANGIBLE ASSETS'
        ] );
    
    }
}
