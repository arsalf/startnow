<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Startup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //\App\Models\User::factory(500)->create();
       
        $startup =  Startup::factory()->create();
 
        $product = Product::factory()
            ->count(mt_rand(3, 10))
            ->for($startup)
            ->create();

        $product->each(function ($u) use ($startup){            
            $u->productDetail()->save(ProductDetail::factory()->for($startup)->make());
        });
    }
}
