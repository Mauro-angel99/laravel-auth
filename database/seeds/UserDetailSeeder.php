<?php

use App\Models\UserDetail;
use Illuminate\Database\Seeder;

class UserDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_detail = new UserDetail();

        $user_detail->user_id = 1;
        $user_detail->first_name = 'Mauro';
        $user_detail->last_name = 'Angelotti';
        $user_detail->phone = '564786516';
        $user_detail->address = 'Via Parini';
        $user_detail->birthyear = 1999;

        $user_detail->save();
    }
}