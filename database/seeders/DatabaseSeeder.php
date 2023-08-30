<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(home_categorySeede::class);
        $this->call(OrderItemsSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(ReviewsSeeder::class);
        $this->call(SalesSeeder::class);
        $this->call(settingSeeder::class);
        $this->call(SubcategoriesSeeder::class);
        $this->call(userSeeder::class);
        $this->call(bannerSeeder::class);
     
      
    }
}