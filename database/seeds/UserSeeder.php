<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_user = new User();

            $new_user->name = 'Mauro';
            $new_user->email = 'angelottimauro@gmail.com';
            $new_user->password = bcrypt('22tmnt22');

            $new_user->save();
    }
}