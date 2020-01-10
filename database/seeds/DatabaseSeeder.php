<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CompanyTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
        $this->call(EmployeeTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(ProviderTableSeeder::class);
        $this->call(PurchaseDetailTableSeeder::class);
        $this->call(PurchaseTableSeeder::class);
        $this->call(SaleDetailTableSeeder::class);
        $this->call(SaleTableSeeder::class);

    }
}
