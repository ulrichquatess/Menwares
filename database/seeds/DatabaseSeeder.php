<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {//Here we change the name from user to what we want to seed
    	$this->call(CategoryTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
    }
}
