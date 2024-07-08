<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Review;
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
        //         \App\Models\User::factory(10)->create();
        //        Review::factory('300')->create();
        //        Product::factory('50')->create();
        //        Review::factory()->count(300)->create();
        Product::factory()->count(50)->create();
        Review::factory()->count(300)->create();
        //        factory(Product::class, 50)->create();
        //        factory(Review::class, 300)->create();
    }

}
