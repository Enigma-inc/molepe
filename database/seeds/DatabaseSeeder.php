<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    private $tables =[
        'asset_classes',
        'asset_subclasses',
        'zones',
        'asset_groups',
        'locations',
        'assets',
        'users',
        'custodians',
        'departments',
        'sections',
        'cost_centers',
        'asset_accountabilities'
    ];
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->cleanDatabase();

        $this->call(AssetClassesTableSeeder::class);
        $this->call(AssetSubclassesTableSeeder::class);
        $this->call(ZonesTableSeeder::class);
        $this->call(LocationTableSeeder::class);
        $this->call(AssetGroupTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(AssetsTableSeeder::class);
        $this->call(CustodiansTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(CostCentersTableSeeder::class);
        $this->call(AccountabilitiesTableSeeder::class);

        Model::unguard();
    }

    public function cleanDatabase()
    {
        DB::statement("SET foreign_key_checks=0");
        foreach($this->tables as $table){
            DB::table($table)->truncate();
        }
        DB::statement('SET foreign_key_checks=1');
    }

}
