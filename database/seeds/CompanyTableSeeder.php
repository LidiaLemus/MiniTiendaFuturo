<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $compania = [
            [
                'name' => 'Diana',
                'nit'=> '4187987-9',
                'address'=> 'Esquipulas',
                'email' => 'diana@gmail.com',
                'phone' => ('14526874'),
                'is_active' => ('1'),
            ],
            [
                'name' => 'Coca Cola',
                'nit'=> '85748574-7',
                'address'=> 'chiquimula',
                'email' => 'cola@gmail.com',
                'phone' => ('47857485'),
                'is_active' => ('1'),
            ],
            [
                'name' => 'Lala',
                'nit'=> '574717-9',
                'address'=> 'Esquipulas',
                'email' => 'lala@gmail.com',
                'phone' => ('587469874'),
                'is_active' => ('1'),
            ],
            [
                'name' => 'Margarina Marisol',
                'nit'=> '57874-9',
                'address'=> 'Esquipulas',
                'email' => 'sol@gmail.com',
                'phone' => ('587869874'),
                'is_active' => ('1'),
            ],
            [
                'name' => 'Marinela',
                'nit'=> '57774-9',
                'address'=> 'Esquipulas',
                'email' => 'marinela@gmail.com',
                'phone' => ('588769874'),
                'is_active' => ('1'),
            ],
            
        ];

DB::table('companies')->insert($compania);

}
    }

