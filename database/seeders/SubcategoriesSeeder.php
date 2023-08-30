<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('subcategories')->insert([
            [
                'name'=>'all baby foods',
                'slug'=>'all_baby_foods',
                'categories_id'=>1,
                'photo'=>'all baby foods-banner.png',
                'file_path'=>'images/subcatimg'
                
            ],

            [
                'name'=>'baby accessories',
                'slug'=>'baby_accessories',
                'categories_id'=>1,
                'photo'=>'baby accessories-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'baby cares',
                'slug'=>'baby_cares',
                'categories_id'=>1,
                'photo'=>'baby care-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'diapers and wipes',
                'slug'=>'diapers_and_wipes',
                'categories_id'=>1,
                'photo'=>'diapers and wipes-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'antiseptics',
                'slug'=>'antiseptics_',
                'categories_id'=>2,
                'photo'=>'antiseptics-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'food supplements',
                'slug'=>'food_supplements',
                'categories_id'=>2,
                'photo'=>'food supplements-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'hair cares',
                'slug'=>'hair_cares',
                'categories_id'=>2,
                'photo'=>'hair cares-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>"local deo's",
                'slug'=>"local_deo's",
                'categories_id'=>2,
                'photo'=>'local deos-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>"man's stuffs",
                'slug'=>"man's_stuffs",
                'categories_id'=>2,
                'photo'=>'man stuffs-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'shampoos',
                'slug'=>'shampoos_',
                'categories_id'=>2,
                'photo'=>'shampoos-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'sops and liquids',
                'slug'=>'sops_and_liquids',
                'categories_id'=>2,
                'photo'=>'sop and liquids-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'women intensives',
                'slug'=>'women_intensives',
                'categories_id'=>2,
                'photo'=>'women intensives-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'all breads',
                'slug'=>'all_breads',
                'categories_id'=>3,
                'photo'=>'all breads-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'dry stuffs',
                'slug'=>'dry_stuffs',
                'categories_id'=>4,
                'photo'=>'dry stuffs-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'coffee',
                'slug'=>'coffee_',
                'categories_id'=>5,
                'photo'=>'coffee-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'juices',
                'slug'=>'juices_',
                'categories_id'=>5,
                'photo'=>'juices-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'powder juices',
                'slug'=>'powder_juices',
                'categories_id'=>5,
                'photo'=>'powder juices-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'soft drinks',
                'slug'=>'soft_drinks',
                'categories_id'=>5,
                'photo'=>'soft drinks-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [       
                'name'=>'tea',
                'slug'=>'tea_',
                'categories_id'=>5,
                'photo'=>'tea-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'dairy products',
                'slug'=>'dairy_products',
                'categories_id'=>6,
                'photo'=>'dairy products-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'dal',
                'slug'=>'dal_',
                'categories_id'=>6,
                'photo'=>'dal-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'eggs',
                'slug'=>'eggs_',
                'categories_id'=>6,
                'photo'=>'eggs-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'flours',
                'slug'=>'flours_',
                'categories_id'=>6,
                'photo'=>'flours-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'oils',
                'slug'=>'oils_',
                'categories_id'=>6,
                'photo'=>'oils-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'ready mix',
                'slug'=>'ready_mix',
                'categories_id'=>6,
                'photo'=>'ready mix-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'rice',
                'slug'=>'rice_',
                'categories_id'=>6,
                'photo'=>'rice-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'salt and sugars',
                'slug'=>'salt_and_sugars',
                'categories_id'=>6,
                'photo'=>'salt and sugars-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'shemai and sujis',
                'slug'=>'shemai_and_sujis',
                'categories_id'=>6,
                'photo'=>'shemai and sujis-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'spices',
                'slug'=>'spices_',
                'categories_id'=>6,
                'photo'=>'spices-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'home and toilet cleanings',
                'slug'=>'home_and_toilet_cleanings',
                'categories_id'=>7,
                'photo'=>'home and toilet cleanings-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'insects and mosquito controls',
                'slug'=>'insects_and_mosquito_controls',
                'categories_id'=>7,
                'photo'=>'insects and mosquito controls-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [   
                'name'=>'kitchen cleaning',
                'slug'=>'kitchen_cleaning',
                'categories_id'=>7,
                'photo'=>'kitchen cleaning-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'laundry stuff',
                'slug'=>'laundry_stuff',
                'categories_id'=>7,
                'photo'=>'laundry stuff-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'napkin and paper stuff',
                'slug'=>'napkin_and_paper_stuff',
                'categories_id'=>7,
                'photo'=>'napkin and paper stuff-banner.png',
                'file_path'=>'images/subcatimg'
                
                
            ],
            [
                'name'=>'biscuits and local cakes and chanacur',
                'slug'=>'biscuits_and_local_cakes_and_chanacur',
                'categories_id'=>8,
                'photo'=>'biscuits and local cakes and chanacur-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'candy chocolate',
                'slug'=>'candy_chocolate',
                'categories_id'=>8,
                'photo'=>'candy chocolate-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'chips and pretzels',
                'slug'=>'chips_and_pretzels',
                'categories_id'=>8,
                'photo'=>'chips and pretzels-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'cookies',
                'slug'=>'cookies_',
                'categories_id'=>8,
                'photo'=>'cookies-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'local snacks',
                'slug'=>'local_snacks',
                'categories_id'=>8,
                'photo'=>'local snacks-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'noodles',
                'slug'=>'noodles_',
                'categories_id'=>8,
                'photo'=>'noodles-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'pasta macaroni',
                'slug'=>'pasta_macaroni',
                'categories_id'=>8,
                'photo'=>'pasta macaroni-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'sauces and salad dressings',
                'slug'=>'sauces_and_salad_dressings',
                'categories_id'=>8,
                'photo'=>'salad and dressings-banner.png',
                'file_path'=>'images/subcatimg'
            ],
            [
                'name'=>'soups',
                'slug'=>'soups_',
                'categories_id'=>8,
                'photo'=>'soups-banner.png',
                'file_path'=>'images/subcatimg'
            ],
          
            


         ]);
    }
}