<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = [
            [
               'code'=> '001',
               'name'=> 'Agua Pura Salvavida',
               'stock'=> '76',
               'sale_price'=> '5',
               'purchase_price'=> '4',
               'is_active'=> '1', 
            ],
            [
                'code'=> '002',
                'name'=> 'Agua en botella 1lts',
                'stock'=> '74',
                'sale_price'=> '10',
                'purchase_price'=> '6',
                'is_active'=> '1', 
             ],
             [
                'code'=> '003',
                'name'=> 'Galleta Paquete',
                'stock'=> '20',
                'sale_price'=> '8',
                'purchase_price'=> '6',
                'is_active'=> '1', 
             ],
             [
                'code'=> '004',
                'name'=> 'Tenedores Paquete de 25 unidades',
                'stock'=> '20',
                'sale_price'=> '3',
                'purchase_price'=> '2',
                'is_active'=> '1', 
             ], [
                'code'=> '005',
                'name'=> 'Pquetes de Nachos',
                'stock'=> '30',
                'sale_price'=> '5',
                'purchase_price'=> '4',
                'is_active'=> '1', 
             ],
        ];
        DB::table('products')->insert($product);
    }
}
