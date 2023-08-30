<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  DB::table('order_items')->insert([

        
            'product_id'=>1,
            'order_id'=>1,
            'price'=>'200.00',
           'quantity'=>2,
            'rstatus'=>0,
            


      
    
           
      

      ]);
    }
}