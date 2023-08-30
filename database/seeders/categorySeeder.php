<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categorySeeder extends Seeder
{
    public function run()
    {
        $data=array(  
            array(
                'title'=>'baby care',
                'slug'=>'baby_care',
                
                'summary'=>'baby care summary',
          
                'photo'=>'baby care-banner.png',
                'file_path'=>'images/allcategories'
                 ),
                 array(
                  'title'=>'beauty and health',
                  'slug'=>'beauty_and_health',
                  
                  'summary'=>'beauty and health summary',
                
                  'photo'=>'beauty and health-banner.png',
                  'file_path'=>'images/allcategories'
                   ),
                   array(
                    'title'=>'breakfast',
                    'slug'=>'_breakfast',
                    
                    'summary'=>'breakfast summary',
                  
                    'photo'=>'breakfast-banner.png',
                    'file_path'=>'images/allcategories'
                     ),
                     array(
                        'title'=>' diabetic foods',
                        'slug'=>'_ diabetic foods',
                        
                        'summary'=>' diabetic foods summary',
                      
                        'photo'=>' diabetic foods-banner.png',
                        'file_path'=>'images/allcategories'
                         ),

                    
                     array(
                      'title'=>'drinks and sipping',
                      'slug'=>'drinks_and_sipping',
                      
                      'summary'=>'drinks and sipping summary',
                   
                      'photo'=>'drinks and sipping-banner.png',
                      'file_path'=>'images/allcategories'
                       ),
                       array(
                        'title'=>'food',
                        'slug'=>'_food',
                        
                        'summary'=>'food summary',
                      
                        'photo'=>'food-banner.png',
                        'file_path'=>'images/allcategories'
                         ),
                         array(
                          'title'=>'home and cleaning',
                          'slug'=>'home_and_cleaning',
                          
                          'summary'=>'home and cleaning summary',
                         
                          'photo'=>'home and cleaning-banner.png',
                          'file_path'=>'images/allcategories'
                           ),
                           array(
                            'title'=>'snacks',
                            'slug'=>'_snacks',
                            
                            'summary'=>'snacks summary',
                         
                            'photo'=>'snacks-banner.png',
                            'file_path'=>'images/allcategories'
                             )
         


     );

     DB::table('categories')->insert($data);
  }
    
    }