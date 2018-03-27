<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 30; $i++) {
          Product::create([
                'name' => 'Laptop' . $i,
                'slug' => 'laptop-' . $i,
                'details' => 'TB SSD, 32GB RAM',
                'price' => rand(12000, 24999),
                 'description' => 'In aliquet erat' . $i . 'euismod nisl sollicitudin gravida. Nam sit amet sem ullamcorper, placerat urna et, euismod mi. Curabitur magna tortor, tincidunt at nisi non, bibendum bibendum risus. Donec condimentum metus in justo ullamcorper pha', 
                 'size' => 'Xl',

        ])->category()->attach(1);

      }

      $product = Product::find(1);
      $product->category()->attach(2);

      //Destop
      for($i = 1; $i < 30; $i++) {
        Product::create([
            'name' => 'Desktob' . $i,
            'slug' => 'desktop-' . $i,
            'details' => 'TB SSD, 32GB RAM',
            'price' => rand(12000, 24999),
             'description' => 'In aliquet erat' .$i .' euismod nisl sollicitudin gravida. Nam sit amet sem ullamcorper, placerat urna et, euismod mi. Curabitur magna tortor, tincidunt at nisi non, bibendum bibendum risus. Donec condimentum metus in justo ullamcorper pha', 
             'size' => 'L',

        ])->category()->attach(2);
    }

        //Mobile Phones
    for($i = 1; $i < 30; $i++) {
        Product::create([
            'name' => 'Mobile Phone' . $i,
            'slug' => 'mobile-phone' . $i,
            'details' => 'TB SSD, 32GB RAM',
            'price' => rand(12000, 24999),
             'description' => 'In aliquet erat' .$i .'euismod nisl sollicitudin gravida. Nam sit amet sem ullamcorper, placerat urna et, euismod mi. Curabitur magna tortor, tincidunt at nisi non, bibendum bibendum risus. Donec condimentum metus in justo ullamcorper pha', 
             'size' => 'S',

        ])->category()->attach(3);
    }

    // Dresses Here
    for($i = 1; $i < 30; $i++) {
        Product::create([
            'name' => 'Dresses' . $i,
            'slug' => 'dresses-' . $i,
            'details' => 'Dresses Here',
            'price' => rand(12000, 24999),
             'description' => 'In aliquet erat euismod' . $i . 'nisl sollicitudin gravida. Nam sit amet sem ullamcorper, placerat urna et, euismod mi. Curabitur magna tortor',
             'size' => 'M', 

        ])->category()->attach(4);

    }

    //  Here
    for($i = 1; $i < 30; $i++) {
        Product::create([
            'name' => 'Mouse' . $i,
            'slug' => 'mouse-' . $i,
            'details' => 'Dresses Here',
            'price' => rand(12000, 24999),
             'description' => 'In aliquet erat' .$i. ' euismod nisl sollicitudin gravida. Nam sit amet sem ullamcorper, placerat urna et, euismod mi. Curabitur magna tortor', 
             'size' => 'Xl',

        ])->category()->attach(5);
    }

    }
}
