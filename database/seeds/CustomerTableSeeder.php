<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $customer = [

            [
                'fullname'=> 'Camila Rodriguez',
                'email'=> 'cami@gmail.com',
                'address'=> 'Esquipulas',
                'phone'=> '74814526',
                'nit'=> '415879-9',
                'is_active'=> '1',
            ],
            [
                'fullname'=> 'Rocio Garcia',
                'email'=> 'rosy@gmail.com',
                'address'=> 'Esquipulas',
                'phone'=> '74814541',
                'nit'=> '415812-9',
                'is_active'=> '1',
            ],
            [
                'fullname'=> 'Rosibel Garcia',
                'email'=> 'rosibel@gmail.com',
                'address'=> 'Esquipulas',
                'phone'=> '74811026',
                'nit'=> '255879-9',
                'is_active'=> '1',
            ],
            [
                'fullname'=> 'Daniel Paz',
                'email'=> 'daniel@gmail.com',
                'address'=> 'Esquipulas',
                'phone'=> '05814526',
                'nit'=> '412579-9',
                'is_active'=> '1',
            ],
            [
                'fullname'=> 'Melia Diaz',
                'email'=> 'meli@gmail.com',
                'address'=> 'Esquipulas',
                'phone'=> '74812526',
                'nit'=> '411479-9',
                'is_active'=> '1',
            ],
        ];
        DB::table('customers')->insert($customer);
    }
}
