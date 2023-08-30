<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class home_categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_categories')->insert([
              'sel_categories'=>'2,4,6,8,11,13', 
              'no_of_products'=>8 
             
        

        ]);
    }
}