<?php

use App\Asset;
use App\CostCenter;
use App\Custodian;
use App\Department;
use App\Section;
use App\AssetAccountability;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;
use Faker\Provider\Barcode;

class AccountabilitiesTableSeeder extends Seeder
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

        $departmentIds = Department::all('id')->pluck('id');
        $custodianIds = Custodian::all('id')->pluck('id');
        $costCenterIds = CostCenter::all('id')->pluck('id');
        $sectionIds = Section::all('id')->pluck('id');

        foreach(range(1,20) as $index)
        {
            AssetAccountability::create( [
                'restrictions'=>$fake->sentence(20),
                'department_id'=>$fake->randomElement($departmentIds->toArray()),
                'custodian_id'=>$fake->randomElement($custodianIds->toArray()),
                'cost_center_id'=>$fake->randomElement($costCenterIds->toArray()),
                'section_id'=>$fake->randomElement($sectionIds->toArray()),                
            ]);
        }
    }
}
