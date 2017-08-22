<?php

use App\Custodian;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CustodiansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $custodians = array(
            ['name' => 'Mochesane', 'last_name' => 'Kheekhe', 'email' => 'mpali@gmail.com', 'phone' => '50223607'],
            ['name' => 'Moshe', 'last_name' => 'Teboho', 'email' => 'mosh@gmail.com', 'phone' => '58223607'],
            ['name' => 'Moseli', 'last_name' => 'Tshoeunyane', 'email' => 'mosca@gmail.com', 'phone' => '58000223'],
            ['name' => 'Serame', 'last_name' => 'Ralebese', 'email' => 'nonona@gmail.com', 'phone' => '63843897']              
        );

        foreach($custodians as $custodian){
            Custodian::create($custodian);
        }
    }
}
