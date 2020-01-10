<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Marina',
                'address'=> 'Esquipulas',
                'phone'=> '58698741',
                'email' => 'marina@gmail.com',
                'password' => bcrypt('mark12345'),
                'is_active'=>('1'),
            ],
            [
                'name' => 'Lidia',
                'address' => 'Chiquimula',
                'phone' => '58698745',
                'email' => '123@gmail.com',
                'password' => bcrypt('jep1234'),
                'is_active'=>('1'),
            ],
            [
                'name' => 'victoria',
                'address' => 'Zacapa',
                'phone' => '69325785',
                'email' => 'vicky@gmail.com',
                'password' => bcrypt('clavero1234'),
                'is_active'=>('1'),
            ],
        ];

DB::table('users')->insert($users);

}
    }

