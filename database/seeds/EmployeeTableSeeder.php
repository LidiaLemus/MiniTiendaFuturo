<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $employee = [
            [
            'fullname'=> 'Lidia Marina Agustin Lemus',
            'address'=> 'Esquipulas',
            'phone'=> '41527896',
            'email'=> 'lidia@gmail.com',
            'cui'=> '1452478747896',

      ],

        [
            'fullname'=> 'victoria Alessandra',
            'address'=> 'Esquipulas',
            'phone'=> '41527898',
            'email'=> 'vicky@gmail.com',
            'cui'=> '1452478857896',  
        ],
        [
            'fullname'=> 'karen Garcia',
            'address'=> 'Esquipulas',
            'phone'=> '41527877',
            'email'=> 'karen@gmail.com',
            'cui'=> '1452578857896',  
        ],
        [
            'fullname'=> 'Ashly Garcia',
            'address'=> 'Esquipulas',
            'phone'=> '41527177',
            'email'=> 'aly@gmail.com',
            'cui'=> '1452578859896',  
        ],
        [
            'fullname'=> 'Ruth Diaz',
            'address'=> 'Esquipulas',
            'phone'=> '41527814',
            'email'=> 'ruth@gmail.com',
            'cui'=> '1451078857896',  
        ],

        ];
        DB::table('employees')->insert($employee);


    }
}
