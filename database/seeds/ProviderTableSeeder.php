<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProviderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $provider = [
            [
                'fullname'=> 'Hely Mendez',
                'phone'=> '41528745',
                'email'=> 'hely@gmail.com',
                'company_id'=> '2',
            ],
            [
                'fullname'=> 'Mariela Garcia',
                'phone'=> '41524745',
                'email'=> 'mary@gmail.com',
                'company_id'=> '1',
            ],
            [
                'fullname'=> 'Santy Mata',
                'phone'=> '41528747',
                'email'=> 'santy@gmail.com',
                'company_id'=> '2',
            ],
            [
                'fullname'=> 'Samuel Paz',
                'phone'=> '41528714',
                'email'=> 'samuel@gmail.com',
                'company_id'=> '3',
            ],
            [
                'fullname'=> 'Luis Romero',
                'phone'=> '41528714',
                'email'=> 'luis@gmail.com',
                'company_id'=> '4',
            ],
            [
                'fullname'=> 'Doris Lemus',
                'phone'=> '41578745',
                'email'=> 'doris@gmail.com',
                'company_id'=> '4',
            ],
        ];
        DB::table('providers')->insert($provider);
    }
}
