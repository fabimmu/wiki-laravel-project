<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert(

            [
                [
                    'role_id' => 1,
                    'name' => ' Admin user',
                    'email' => 'admin@gmail.com',
                    'password' => 'Welcome01!'

                ]


            ]

        );

        foreach (DB::table('users')->get() as $user) {
            DB::table('users')
                ->where("id", $user->id)
                ->update(array("password" => Hash::make($user->password)));
        }
    }
}
