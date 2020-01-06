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
                'name' => 'admin',
                'address'=> 'Esquipulas',
                'phone'=> '58698741',
                'email' => 'mark@gmail.com',
                'password' => bcrypt('mark12345'),
            ],
            [
                'name' => 'user1',
                'address' => 'Chiquimula',
                'phone' => '58698745',
                'email' => 'jep@gmail.com',
                'password' => bcrypt('jep1234'),
            ],
            [
                'name' => 'user2',
                'address' => 'Zacapa',
                'phone' => '69325785',
                'email' => 'clavero@gmail.com',
                'password' => bcrypt('clavero1234'),
            ],
        ];

DB::table('users')->insert($users);

}
    }

