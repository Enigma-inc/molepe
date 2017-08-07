<?php

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = array(
            ['name' => 'EPPE Admin', 'email' => 'neo@enigma.co.ls', 'password' => Hash::make('enigma')],
            ['name' => 'Neo Mokoena', 'email' => 'mokoena.n.a@gmail.com', 'password' => Hash::make('m0k03na')]
        );
        foreach ($users as $user)
        {
            User::create($user);
        }

    }
}
