<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
        	['name' => 'Mackbook', 'slug' => 'mack', 'created_at' => $now, 'updated_at' => $now],
        	['name' => 'windows', 'slug' => 'xp', 'created_at' => $now, 'updated_at' => $now ],
            ['name' => 'Mobile', 'slug' => 'phones', 'created_at' => $now, 'updated_at' => $now ],
            ['name' => 'Men', 'slug' => 'womens', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'uses', 'slug' => 'clicks', 'created_at' => $now, 'updated_at' => $now],

            ]);
    }
}
