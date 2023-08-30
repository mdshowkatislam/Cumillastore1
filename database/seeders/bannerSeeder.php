<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert(
     [
        [   
            'title'=>'banner1',
            'subtitle'=>'subtitle1',
            'price'=>'300',
            'link'=>'http://localhost:8000/images/MainSliders',
            'image'=>'sld-1.png',
            'status'=>1,
        ],   
        [   
            'title'=>'banner2',
            'subtitle'=>'subtitle2',
            'price'=>'400',
            'link'=>'http://localhost:8000/images/MainSliders',
            'image'=>'sld-2.png',
            'status'=>1,
        ],    
        [   
            'title'=>'banner3',
            'subtitle'=>'subtitle3',
            'price'=>'1000',
            'link'=>'http://localhost:8000/images/MainSliders',
            'image'=>'sld-3.png',
            'status'=>1,
        ],    
        [   
            'title'=>'banner4',
            'subtitle'=>'subtitle4',
            'price'=>'1500',
            'link'=>'http://localhost:8000/images/MainSliders',
            'image'=>'sld-4.png',
            'status'=>1,
        ],  
        [   
            'title'=>'banner5',
            'subtitle'=>'subtitle5',
            'price'=>'2000',
            'link'=>'http://localhost:8000/images/MainSliders',
            'image'=>'sld-5.png',
            'status'=>1,
        ],   
        [   
            'title'=>'banner6',
            'subtitle'=>'subtitle6',
            'price'=>'4000',
            'link'=>'http://localhost:8000/images/MainSliders',
            'image'=>'sld-6.png',
            'status'=>1,
        ],   
        [   
            'title'=>'banner7',
            'subtitle'=>'subtitle7',
            'price'=>'240',
            'link'=>'http://localhost:8000/images/MainSliders',
            'image'=>'sld-7.png',
            'status'=>1,
        ]

    ]
    
    
    );
    }
}