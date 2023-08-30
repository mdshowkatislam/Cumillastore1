<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class ProductsSeeder extends Seeder { 
	public function run() {
		 DB::table('products') -> insert([



	[

	'name'        => 'nestle nido fortigrow full cream milk powder tin',
	'quantity'    => '350gm',
	'price'       => 550,
	'subcategory' => 'all baby foods',
	'category'    => 'baby care',

	'short_desc'=>'Its a short description',
	'des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer',
	'gallery'   => 'images/products/nestle-nido-1-growing-up-milk-powder-1-3-y-350-gm.png',
	'file_path' => 'images/products/',

	'image' => 'nestle-nido-1-growing-up-milk-powder-1-3-y-350-gm.png',

	'images'=>'nido2.png,nido3.png', 
	'stock'        => 5,
	'stock_status' => 'instock',
	'featured'     => 0,

	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 1,
	'subcategories_id' => 1

	],
	[
	'name'        => 'nestle nido fortigrow full cream milk powder tin',
	'quantity'    => '900gm',
	'price'       => 900,
	'subcategory' => 'all baby foods',
	'category'    => 'baby care',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/nestle-nido-fortigrow-full-cream-milk-powder-tin-900-gm.png',
	'file_path' => 'images/products/',

	'image' => 'nestle-nido-fortigrow-full-cream-milk-powder-tin-900-gm.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',
	
	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 1,
	'subcategories_id' => 1

	],

	[
	'name'        => 'cotton swabs cotton buds',
	'quantity'    => '-300-pcs',
	'price'       => 35,
	'subcategory' => 'baby accessories',
	'category'    => 'baby care',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/cotton-swabs-cotton-buds-300-pcs.png',
	'file_path' => 'images/products/',

	'image' => 'cotton-swabs-cotton-buds-300-pcs.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 1,
	'subcategories_id' => 2

	],
	[
	'name'        => 'nipples',
	'quantity'    => '1pcs',
	'price'       => 30,
	'subcategory' => 'baby accessories',
	'category'    => 'baby care',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/nipples.png',
	'file_path' => 'images/products/',

	'image' => 'nipples.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 1,
	'subcategories_id' => 2

	],
	[
	'name'        => 'prodentalb baby tooth paste strawberry',
	'quantity'    => '40-gm',
	'price'       => 35,
	'subcategory' => 'baby accessories',
	'category'    => 'baby care',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/prodentalb-baby-tooth-paste-strawberry-40-gm.png',
	'file_path' => 'images/products/',

	'image' => 'prodentalb-baby-tooth-paste-strawberry-40-gm.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 1,
	'subcategories_id' => 2

	],
	[
	'name'        => 'prodentalb new junior baby tooth brush',
	'quantity'    => '1-pcs',
	'price'       => 30,
	'subcategory' => 'baby accessories',
	'category'    => 'baby care',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/prodentalb-new-junior-baby-tooth-brush-1-pcs.png',
	'file_path' => 'images/products/',

	'image' => 'prodentalb-new-junior-baby-tooth-brush-1-pcs.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 1,
	'subcategories_id' => 2

	],
	[
	'name'        => 'johnsons baby lotion for baby soft skin',
	'quantity'    => '50-ml',
	'price'       => 100,
	'subcategory' => 'baby cares',
	'category'    => 'baby care',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/johnsons-baby-lotion-for-baby-soft-skin-50-ml.png',
	'file_path' => 'images/products/',

	'image' => 'johnsons-baby-lotion-for-baby-soft-skin-50-ml.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 1,
	'subcategories_id' => 3

	],
	[
	'name'        => 'meril baby shampoo',
	'quantity'    => '110-ml',
	'price'       => 150,
	'subcategory' => 'baby cares',
	'category'    => 'baby care',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/meril-baby-shampoo-110-ml.png',
	'file_path' => 'images/products/',

	'image' => 'meril-baby-shampoo-110-ml.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 1,
	'subcategories_id' => 3

	],
	[
	'name'        => 'huggies dry pants baby diaper pant-xl-12-17-kg',
	'quantity'    => '42-pcs',
	'price'       => 350,
	'subcategory' => 'diapers and wipes',
	'category'    => 'baby care',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/huggies-dry-pants-baby-diaper-pant-xl-12-17-kg-42-pcs.png',
	'file_path' => 'images/products/',

	'image' => 'huggies-dry-pants-baby-diaper-pant-xl-12-17-kg-42-pcs.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 1,
	'subcategories_id' => 4

	],
	[
	'name'        => 'neocare baby wipes',
	'quantity'    => '120-pcs',
	'price'       => 400,
	'subcategory' => 'diapers and wipes',
	'category'    => 'baby care',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/neocare-baby-wipes-120-pcs.png',
	'file_path' => 'images/products/',

	'image' => 'neocare-baby-wipes-120-pcs.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 1,
	'subcategories_id' => 4

	],
	[
	'name'        => 'aci savlon liquid antiseptic',
	'quantity'    => '500-ml',
	'price'       => 300,
	'subcategory' => 'antiseptics',
	'category'    => 'beauty and health',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/aci-savlon-liquid-antiseptic-500-ml.png',
	'file_path' => 'images/products/',

	'image' => 'aci-savlon-liquid-antiseptic-500-ml.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 2,
	'subcategories_id' => 5

	],
	[
	'name'        => 'dettol antiseptic disinfectant liquid concentrated',
	'quantity'    => '50-ml',
	'price'       => 300,
	'subcategory' => 'antiseptics',
	'category'    => 'beauty and health',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/dettol-antiseptic-disinfectant-liquid-concentrated-50-ml.png',
	'file_path' => 'images/products/',

	'image' => 'dettol-antiseptic-disinfectant-liquid-concentrated-50-ml.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 2,
	'subcategories_id' => 5

	],
	[
	'name'        => 'hexisol hand rub',
	'quantity'    => '250-ml',
	'price'       => 100,
	'subcategory' => 'antiseptics',
	'category'    => 'beauty and health',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/hexisol-hand-rub-250-ml.png',
	'file_path' => 'images/products/',

	'image' => 'hexisol-hand-rub-250-ml.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 2,
	'subcategories_id' => 5

	],
	[
	'name'        => 'boost healthy drink jar',
	'quantity'    => '400-gm',
	'price'       => 300,
	'subcategory' => 'food supplements',
	'category'    => 'beauty and health',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/boost-healthy-drink-jar-400-gm.png',
	'file_path' => 'images/products/',

	'image' => 'boost-healthy-drink-jar-400-gm.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 2,
	'subcategories_id' => 6

	],
	[
	'name'        => 'horlicks health and nutrition drink jar',
	'quantity'    => '500-gm',
	'price'       => 300,
	'subcategory' => 'food supplements',
	'category'    => 'beauty and health',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/horlicks-health-and-nutrition-drink-jar-500-gm.png',
	'file_path' => 'images/products/',

	'image' => 'horlicks-health-and-nutrition-drink-jar-500-gm.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 2,
	'subcategories_id' => 6

	],
	[
	'name'        => 'bigen speedy conditioning color deep chestnut',
	'quantity'    => '80-gm',
	'price'       => 60,
	'subcategory' => 'hair cares',
	'category'    => 'beauty and health',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/bigen-speedy-conditioning-color-deep-chestnut-80-gm.png',
	'file_path' => 'images/products/',

	'image' => 'bigen-speedy-conditioning-color-deep-chestnut-80-gm.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 2,
	'subcategories_id' => 7

	],
	[
	'name'        => 'parachute coconut oil',
	'quantity'    => '200-ml',
	'price'       => 75,
	'subcategory' => 'hair cares',
	'category'    => 'beauty and health',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/parachute-coconut-oil-200-ml.png',
	'file_path' => 'images/products/',

	'image' => 'parachute-coconut-oil-200-ml.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 2,
	'subcategories_id' => 7

	],
	[
	'name'        => 'fa roll on pink passion',
	'quantity'    => '50-ml',
	'price'       => 180,
	'subcategory' => "local deo's",
	'category'    => 'beauty and health',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/fa-roll-on-pink-passion-50-ml.png',
	'file_path' => 'images/products/',

	'image' => 'fa-roll-on-pink-passion-50-ml.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 2,
	'subcategories_id' => 8

	],
	[
	'name'        => 'rexona women roll on invisible dry',
	'quantity'    => '50-ml',
	'price'       => 180,
	'subcategory' => "local deo's",
	'category'    => 'beauty and health',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/rexona-women-roll-on-invisible-dry-50-ml.png',
	'file_path' => 'images/products/',

	'image' => 'rexona-women-roll-on-invisible-dry-50-ml.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 2,
	'subcategories_id' => 8

	],
	[
	'name'        => 'gillette blue 2 disposable razor single',
	'quantity'    => '1-pcs',
	'price'       => 30,
	'subcategory' => "man's stuffs",
	'category'    => 'beauty and health',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/gillette-blue-2-disposable-razor-single.png',
	'file_path' => 'images/products/',

	'image' => 'gillette-blue-2-disposable-razor-single.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 2,
	'subcategories_id' => 9

	],
	[
	'name'        => 'gillette blue 3 disposable razor',
	'quantity'    => '1-pcs',
	'price'       => 35,
	'subcategory' => "man's stuffs",
	'category'    => 'beauty and health',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/gillette-blue-3-disposable-razor-1-pcs.png',
	'file_path' => 'images/products/',

	'image' => 'gillette-blue-3-disposable-razor-1-pcs.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 2,
	'subcategories_id' => 9

	],
	[
	'name'        => 'nivea men fresh cool shaving foam',
	'quantity'    => '200ml',
	'price'       => 150,
	'subcategory' => "man's stuffs",
	'category'    => 'beauty and health',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/nivea-men-fresh-cool-shaving-foam-200ml.png',
	'file_path' => 'images/products/',

	'image' => 'nivea-men-fresh-cool-shaving-foam-200ml.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 2,
	'subcategories_id' => 9

	],
	[
	'name'        => 'ponds men face wash acne solution',
	'quantity'    => '100-gm',
	'price'       => 75,
	'subcategory' => "man's stuffs",
	'category'    => 'beauty and health',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/ponds-men-face-wash-acne-solution-100-gm.png',
	'file_path' => 'images/products/',

	'image' => 'ponds-men-face-wash-acne-solution-100-gm.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 2,
	'subcategories_id' => 9

	],
	[
	'name'        => 'clear shampoo men cool sport menthol anti dandruff',
	'quantity'    => '180-ml',
	'price'       => 300,
	'subcategory' => 'shampoos',
	'category'    => 'beauty and health',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/clear-shampoo-men-cool-sport-menthol-anti-dandruff-180-ml.png',
	'file_path' => 'images/products/',

	'image' => 'clear-shampoo-men-cool-sport-menthol-anti-dandruff-180-ml.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 2,
	'subcategories_id' => 10

	],
	[
	'name'        => 'dove shampoo hairfall rescue combo pack',
	'quantity'    => '350-ml',
	'price'       => 300,
	'subcategory' => 'shampoos',
	'category'    => 'beauty and health',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/dove-shampoo-hairfall-rescue-combo-pack-350-ml.png',
	'file_path' => 'images/products/',

	'image' => 'dove-shampoo-hairfall-rescue-combo-pack-350-ml.png',

	'images'=>null,
	
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 2,
	'subcategories_id' => 10

	],
	[
	'name'        => 'sunsilk shampoo lusciously thick long',
	'quantity'    => '350-ml',
	'price'       => 300,
	'subcategory' => 'shampoos',
	'category'    => 'beauty and health',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/sunsilk-shampoo-lusciously-thick-long-350-ml.png',
	'file_path' => 'images/products/',

	'image' => 'sunsilk-shampoo-lusciously-thick-long-350-ml.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 2,
	'subcategories_id' =>10

	],
	[
	'name'        => 'dettol soap aloe vera bathing bar soap',
	'quantity'    => '75-gm',
	'price'       => 40,
	'subcategory' => 'sops and liquids',
	'category'    => 'beauty and health',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/dettol-soap-aloe-vera-bathing-bar-soap-75-gm.png',
	'file_path' => 'images/products/',

	'image' => 'dettol-soap-aloe-vera-bathing-bar-soap-75-gm.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 2,
	'subcategories_id' => 11

	],
	[
	'name'        => 'lifebuoy soap bar total',
	'quantity'    => '100-gm',
	'price'       => 40,
	'subcategory' => 'sops and liquids',
	'category'    => 'beauty and health',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/lifebuoy-soap-bar-total-100-gm.png',
	'file_path' => 'images/products/',

	'image' => 'lifebuoy-soap-bar-total-100-gm.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 2,
	'subcategories_id' => 11

	],
	[
	'name'        => 'lifebuoy total 10 antibacterial body washl',
	'quantity'    => '300-ml',
	'price'       => 90,
	'subcategory' => 'sops and liquids',
	'category'    => 'beauty and health',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/lifebuoy-total-10-antibacterial-body-wash-300-ml.png',
	'file_path' => 'images/products/',

	'image' => 'lifebuoy-total-10-antibacterial-body-wash-300-ml.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 2,
	'subcategories_id' =>11

	],
	[
	'name'        => 'lux soap bar soft touch',
	'quantity'    => '35-gm',
	'price'       => 40,
	'subcategory' => 'sops and liquids',
	'category'    => 'beauty and health',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/lux-soap-bar-soft-touch-35-gm.png',
	'file_path' => 'images/products/',

	'image' => 'lux-soap-bar-soft-touch-35-gm.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'popular',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 2,
	'subcategories_id' => 11

	],
	[
	'name'        => 'a8 aci freedom heavy flow wings',
	'quantity'    => '16-pads',
	'price'       => 150,
	'subcategory' => 'women intensives',
	'category'    => 'beauty and health',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/a8-aci-freedom-heavy-flow-wings-16-pads.png',
	'file_path' => 'images/products/',

	'image' => 'a8-aci-freedom-heavy-flow-wings-16-pads.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 2,
	'subcategories_id' => 12

	],
	[
	'name'        => 'b3 whisper maxi nights wings sanitary napkins xl',
	'quantity'    => '15-pads',
	'price'       => 180,
	'subcategory' => 'women intensives',
	'category'    => 'beauty and health',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/b3-whisper-maxi-nights-wings-sanitary-napkins-xl-15-pads.png',
	'file_path' => 'images/products/',

	'image' => 'b3-whisper-maxi-nights-wings-sanitary-napkins-xl-15-pads.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 2,
	'subcategories_id' => 12

	],
	[
	'name'        => 'c5 senora sanitary napkin belt',
	'quantity'    => '15-pcs',
	'price'       => 150,
	'subcategory' => 'women intensives',
	'category'    => 'beauty and health',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/c5-senora-sanitary-napkin-belt-15-pcs.png',
	'file_path' => 'images/products/',

	'image' => 'c5-senora-sanitary-napkin-belt-15-pcs.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 2,
	'subcategories_id' => 12

	],
	[
	'name'        => 'veet hair removal cream for sensitive skin',
	'quantity'    => '25-gm',
	'price'       => 75,
	'subcategory' => 'women intensives',
	'category'    => 'beauty and health',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/veet-hair-removal-cream-for-sensitive-skin-25-gm.png',
	'file_path' => 'images/products/',

	'image' => 'veet-hair-removal-cream-for-sensitive-skin-25-gm.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 2,
	'subcategories_id' => 12

	],
	[
	'name'        => 'burger bun',
	'quantity'    => '4-pcs',
	'price'       => 16,
	'subcategory' => 'all breads',
	'category'    => 'breakfast',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/burger-bun-4-pcs.png',
	'file_path' => 'images/products/',

	'image' => 'burger-bun-4-pcs.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 3,
	'subcategories_id' => 13

	],
	[
	'name'        => 'white bread',
	'quantity'    => '500-gm',
	'price'       => 50,
	'subcategory' => 'all breads',
	'category'    => 'breakfast',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/white-bread-500-gm.png',
	'file_path' => 'images/products/',

	'image' => 'white-bread-500-gm.png',

	'images'=>'brade2.png,brade3.png,brade4.png', 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 3,
	'subcategories_id' => 13

	],
	[
	'name'        => 'ifad brown atta',
	'quantity'    => '1-kg',
	'price'       => 45,
	'subcategory' => 'dry stuffs',
	'category'    => 'diabetic foods',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/ifad-brown-atta-1-kg.png',
	'file_path' => 'images/products/',

	'image' => 'ifad-brown-atta-1-kg.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 4,
	'subcategories_id' => 14

	],
	[
	'name'        => 'tiffany sugar free chocolate cream biscuit',
	'quantity'    => '162-gm',
	'price'       => 50,
	'subcategory' => 'dry stuffs',
	'category'    => 'diabetic foods',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/tiffany-sugar-free-chocolate-cream-biscuit-162-gm.png',
	'file_path' => 'images/products/',

	'image' => 'tiffany-sugar-free-chocolate-cream-biscuit-162-gm.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 4,
	'subcategories_id' => 14

	],

	[
	'name'        => 'nestle nescafe classic instant coffee jar',
	'quantity'    => '50-gm',
	'price'       => 150,
	'subcategory' => 'coffee',
	'category'    => 'drinks and sipping',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/nestle-nescafe-classic-instant-coffee-jar-50-gm.png',
	'file_path' => 'images/products/',

	'image' => 'nestle-nescafe-classic-instant-coffee-jar-50-gm.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'special',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 5,
	'subcategories_id' => 15

	],
	[
	'name'        => 'ispi instant powder drink orange',
	'quantity'    => '500-gm',
	'price'       => 200,
	'subcategory' => 'juices',
	'category'    => 'drinks and sipping',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/ispi-instant-powder-drink-orange-500-gm.png',
	'file_path' => 'images/products/',

	'image' => 'ispi-instant-powder-drink-orange-500-gm.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 5,
	'subcategories_id' => 16

	],
	[
	'name'        => 'pran frooto mango fruit drink',
	'quantity'    => '1-ltr',
	'price'       => 55,
	'subcategory' => 'juices',
	'category'    => 'drinks and sipping',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/pran-frooto-mango-fruit-drink-1-ltr.png',
	'file_path' => 'images/products/',

	'image' => 'pran-frooto-mango-fruit-drink-1-ltr.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 5,
	'subcategories_id' => 16

	],
	[
	'name'        => 'starship mango fruit drinks',
	'quantity'    => '1000-ml',
	'price'       => 60,
	'subcategory' => 'juices',
	'category'    => 'drinks and sipping',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/starship-mango-fruit-drinks-1000-ml.png',
	'file_path' => 'images/products/',

	'image' => 'starship-mango-fruit-drinks-1000-ml.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 5,
	'subcategories_id' => 16

	],
	[
	'name'        => 'tang orange flavoured instant drink powder',
	'quantity'    => '125-gm',
	'price'       => 120,
	'subcategory' => 'powder juices',
	'category'    => 'drinks and sipping',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/tang-orange-flavoured-instant-drink-powder-125-gm.png',
	'file_path' => 'images/products/',

	'image' => 'tang-orange-flavoured-instant-drink-powder-125-gm.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 5,
	'subcategories_id' => 17

	],
	[
	'name'        => 'coca cola',
	'quantity'    => '600-ml',
	'price'       => 60,
	'subcategory' => 'soft drinks',
	'category'    => 'drinks and sipping',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/coca-cola-600-ml.png',
	'file_path' => 'images/products/',

	'image' => 'coca-cola-600-ml.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 5,
	'subcategories_id' => 18

	],
	[
	'name'        => 'pepsi diet pet',
	'quantity'    => '500-ml',
	'price'       => 50,
	'subcategory' => 'soft drinks',
	'category'    => 'drinks and sipping',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/pepsi-diet-pet-500-ml.png',
	'file_path' => 'images/products/',

	'image' => 'pepsi-diet-pet-500-ml.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 5,
	'subcategories_id' => 18

	],
	[
	'name'        => 'brooke bond taaza black tea',
	'quantity'    => '400-gm',
	'price'       => 160,
	'subcategory' => 'tea',
	'category'    => 'drinks and sipping',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/brooke-bond-taaza-black-tea-400-gm.png',
	'file_path' => 'images/products/',

	'image' => 'brooke-bond-taaza-black-tea-400-gm.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 5,
	'subcategories_id' => 19

	],
	[
	'name'        => 'ispahani mirzapore best leaf tea',
	'quantity'    => '400-gm',
	'price'       => 130,
	'subcategory' => 'tea',
	'category'    => 'drinks and sipping',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/ispahani-mirzapore-best-leaf-tea-400-gm.png',
	'file_path' => 'images/products/',

	'image' => 'ispahani-mirzapore-best-leaf-tea-400-gm.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 5,
	'subcategories_id' => 19

	],


	[
	'name'        => 'arla dano daily pusti milk powder',
	'quantity'    => '500-gm',
	'price'       => 400,
	'subcategory' => 'dairy products',
	'category'    => 'food',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/arla-dano-daily-pusti-milk-powder-500-gm.png',
	'file_path' => 'images/products/',

	'image' => 'arla-dano-daily-pusti-milk-powder-500-gm.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 6,
	'subcategories_id' => 20

	],
	[
	'name'        => 'marks milk powder poly',
	'quantity'    => '500-gm',
	'price'       => 450,
	'subcategory' => 'dairy products',
	'category'    => 'food',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/marks-milk-powder-poly-500-gm.png',
	'file_path' => 'images/products/',

	'image' => 'marks-milk-powder-poly-500-gm.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'popular',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 6,
	'subcategories_id' => 20

	],
	[
	'name'        => 'pran uht milk',
	'quantity'    => '200-ml',
	'price'       => 25,
	'subcategory' => 'dairy products',
	'category'    => 'food',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/pran-uht-milk-200-ml.png',
	'file_path' => 'images/products/',

	'image' => 'pran-uht-milk-200-ml.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 6,
	'subcategories_id' => 20

	],
	[
	'name'        => 'anchor boot dal',
	'quantity'    => '500-gm',
	'price'       => 20,
	'subcategory' => 'dal',
	'category'    => 'food',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/anchor-boot-dal-500-gm.png',
	'file_path' => 'images/products/',

	'image' => 'anchor-boot-dal-500-gm.png',

	'images'=>null,
	 'stock'        => 40,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 6,
	'subcategories_id' => 21

	],
	[
	'name'        => 'mashkolai dal peeled',
	'quantity'    => '500-gm',
	'price'       => 70,
	'subcategory' => 'dal',
	'category'    => 'food',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/mashkolai-dal-peeled-500-gm.png',
	'file_path' => 'images/products/',

	'image' => 'mashkolai-dal-peeled-500-gm.png',

	'images'=>null,
	 'stock'        => 20,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 6,
	'subcategories_id' => 21

	],
	[
	'name'        => 'moshur dal imported',
	'quantity'    => '1-kg',
	'price'       => 115,
	'subcategory' => 'dal',
	'category'    => 'food',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/moshur-dal-imported-1-kg.png',
	'file_path' => 'images/products/',

	'image' => 'moshur-dal-imported-1-kg.png',

	'images'=>null,
	 'stock'        => 40,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 6,
	'subcategories_id' => 21

	],
	[
	'name'        => 'mug dal',
	'quantity'    => '500-gm',
	'price'       => 80,
	'subcategory' => 'dal',
	'category'    => 'food',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/mug-dal-500-gm.png',
	'file_path' => 'images/products/',

	'image' => 'mug-dal-500-gm.png',

	'images'=>null,
	 'stock'        => 20,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 6,
	'subcategories_id' => 21

	],
	[
	'name'        => 'chicken eggs special offer',
	'quantity'    => '12-pcs',
	'price'       => 100,
	'subcategory' => 'eggs',
	'category'    => 'food',

	'short_desc'=>'Its a short description','des'      => 'Its a good item,without the packet',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/chicken-eggs-special-offer-12-pcs.png',
	'file_path' => 'images/products/',

	'image' => 'chicken-eggs-special-offer-12-pcs.png',

	'images'=>null, 
	'stock'        => 20,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 6,
	'subcategories_id' => 22

	],
	[
	'name'        => 'duck eggs hasher dim',
	'quantity'    => '6-pcs',
	'price'       => 52,
	'subcategory' => 'eggs',
	'category'    => 'food',

	'short_desc'=>'Its a short description','des'      => 'Its a good item,without the packet',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/duck-eggs-hasher-dim-6-pcs.png',
	'file_path' => 'images/products/',

	'image' => 'duck-eggs-hasher-dim-6-pcs.png',

	'images'=>null, 
	'stock'        => 20,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'special',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 6,
	'subcategories_id' => 22

	],
	[
	'name'        => 'bashundhara atta',
	'quantity'    => '2-kg',
	'price'       => 80,
	'subcategory' => 'flours',
	'category'    => 'food',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/bashundhara-atta-2-kg.png',
	'file_path' => 'images/products/',

	'image' => 'bashundhara-atta-2-kg.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 6,
	'subcategories_id' =>23

	],
	[
	'name'        => 'fresh atta',
	'quantity'    => '2-kg',
	'price'       => 75,
	'subcategory' => 'flours',
	'category'    => 'food',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/fresh-atta-2-kg.png',
	'file_path' => 'images/products/',

	'image' => 'fresh-atta-2-kg.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 6,
	'subcategories_id' => 23

	],
	[
	'name'        => 'fresh fortified soyabean oil',
	'quantity'    => '2-ltr',
	'price'       => 200,
	'subcategory' => 'oils',
	'category'    => 'food',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/fresh-fortified-soyabean-oil-2-ltr.png',
	'file_path' => 'images/products/',

	'image' => 'fresh-fortified-soyabean-oil-2-ltr.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'popular',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 6,
	'subcategories_id' => 24

	],
	[
	'name'        => 'fresh mustard oil',
	'quantity'    => '500-ml',
	'price'       => 70,
	'subcategory' => 'oils',
	'category'    => 'food',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/fresh-mustard-oil-500-ml.png',
	'file_path' => 'images/products/',

	'image' => 'fresh-mustard-oil-500-ml.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 6,
	'subcategories_id' => 24

	],
	[
	'name'        => 'nestle maggi fusian fried rice seasoning mix sachet',
	'quantity'    => '6-gm',
	'price'       => 5,
	'subcategory' => 'ready mix',
	'category'    => 'food',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/nestle-maggi-fusian-fried-rice-seasoning-mix-sachet-6-gm.png',
	'file_path' => 'images/products/',

	'image' => 'nestle-maggi-fusian-fried-rice-seasoning-mix-sachet-6-gm.png',

	'images'=>null, 
	'stock'        => 50,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'special',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 6,
	'subcategories_id' => 25

	],
	[
	'name'        => 'nestle maggi shaad e magic seasoning mix',
	'quantity'    => '4gm-12pcs',
	'price'       => 36,
	'subcategory' => 'ready mix',
	'category'    => 'food',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/nestle-maggi-shaad-e-magic-seasoning-mix-4gm12pcs.png',
	'file_path' => 'images/products/',

	'image' => 'nestle-maggi-shaad-e-magic-seasoning-mix-4gm12pcs.png',

	'images'=>null,
	 'stock'        => 50,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 6,
	'subcategories_id' => 25

	],

	[
	'name'        => 'miniket rice premium',
	'quantity'    => '5-kg',
	'price'       => 250,
	'subcategory' => 'rice',
	'category'    => 'food',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/miniket-rice-premium-5-kg.png',
	'file_path' => 'images/products/',

	'image' => 'miniket-rice-premium-5-kg.png',

	'images'=>null,
	 'stock'        => 50,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 6,
	'subcategories_id' => 26

	],
	[
	'name'        => 'pran chinigura rice',
	'quantity'    => '2-kg',
	'price'       => 160,
	'subcategory' => 'rice',
	'category'    => 'food',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/pran-chinigura-rice-2-kg.png',
	'file_path' => 'images/products/',

	'image' => 'pran-chinigura-rice-2-kg.png',

	'images'=>null,
	 'stock'        => 20,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 6,
	'subcategories_id' =>26

	],
	[
	'name'        => 'aci pure salt',
	'quantity'    => '1-kg',
	'price'       => 300,
	'subcategory' => 'salt and sugars',
	'category'    => 'food',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/aci-pure-salt-1-kg.png',
	'file_path' => 'images/products/',

	'image' => 'aci-pure-salt-1-kg.png',

	'images'=>null,
	 'stock'        => 10,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 6,
	'subcategories_id' => 27

	],
	[
	'name'        => 'fresh refined sugar',
	'quantity'    => '1-kg',
	'price'       => 300,
	'subcategory' => 'salt and sugars',
	'category'    => 'food',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/fresh-refined-sugar-1-kg.png',
	'file_path' => 'images/products/',

	'image' => 'fresh-refined-sugar-1-kg.png',

	'images'=>null, 
	'stock'        => 10,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 6,
	'subcategories_id' => 27

	],
	[
	'name'        => 'cock vermicelli shemai',
	'quantity'    => '200-gm',
	'price'       => 35,
	'subcategory' => 'shemai and sujis',
	'category'    => 'food',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/cock-vermicelli-shemai-200-gm.png',
	'file_path' => 'images/products/',

	'image' => 'cock-vermicelli-shemai-200-gm.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 6,
	'subcategories_id' => 28

	],
	[
	'name'        => 'kolson laccha shemai',
	'quantity'    => '200-gm',
	'price'       => 40,
	'subcategory' => 'shemai and sujis',
	'category'    => 'food',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/kolson-laccha-shemai-200-gm.png',
	'file_path' => 'images/products/',

	'image' => 'kolson-laccha-shemai-200-gm.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 6,
	'subcategories_id' => 28

	],
	[
	'name'        => 'radhuni chicken masala',
	'quantity'    => '20-gm',
	'price'       => 40,
	'subcategory' => 'spices',
	'category'    => 'food',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/radhuni-chicken-masala-20-gm.png',
	'file_path' => 'images/products/',

	'image' => 'radhuni-chicken-masala-20-gm.png',

	'images'=>null, 
	'stock'        => 10,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 6,
	'subcategories_id' => 29

	],
	[
	'name'        => 'radhuni turmeric holud powder',
	'quantity'    => '200-gm',
	'price'       => 30,
	'subcategory' => 'spices',
	'category'    => 'food',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/radhuni-turmeric-holud-powder-200-gm.png',
	'file_path' => 'images/products/',

	'image' => 'radhuni-turmeric-holud-powder-200-gm.png',

	'images'=>null,
	 'stock'        => 10,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 6,
	'subcategories_id' =>29

	],
	[
	'name'        => 'harpic bathroom cleaning powder original',
	'quantity'    => '400-gm',
	'price'       => 60,
	'subcategory' => 'home and toilet cleanings',
	'category'    => 'home and cleaning',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/harpic-bathroom-cleaning-powder-original-400-gm.png',
	'file_path' => 'images/products/',

	'image' => 'harpic-bathroom-cleaning-powder-original-400-gm.png',

	'images'=>null,
	 'stock'        => 10,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 7,
	'subcategories_id' => 30

	],
	[
	'name'        => 'tibet rose lemon detergent powder',
	'quantity'    => '500-gm',
	'price'       => 45,
	'subcategory' => 'home and toilet cleanings',
	'category'    => 'home and cleaning',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/tibet-rose-lemon-detergent-powder-500-gm.png',
	'file_path' => 'images/products/',

	'image' => 'tibet-rose-lemon-detergent-powder-500-gm.png',

	'images'=>null,
	 'stock'        => 10,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 7,
	'subcategories_id' => 30

	],
	[
	'name'        => 'baoma mosquito coil',
	'quantity'    => '-10-pcs',
	'price'       => 45,
	'subcategory' => 'insects and mosquito controls',
	'category'    => 'home and cleaning',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/baoma-mosquito-coil-10-pcs.png',
	'file_path' => 'images/products/',

	'image' => 'baoma-mosquito-coil-10-pcs.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 7,
	'subcategories_id' => 31

	],
	[
	'name'        => 'xtreme mosquito coil',
	'quantity'    => '10-pcs',
	'price'       => 45,
	'subcategory' => 'insects and mosquito controls',
	'category'    => 'home and cleaning',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/xtreme-mosquito-coil-10-pcs.png',
	'file_path' => 'images/products/',

	'image' => 'xtreme-mosquito-coil-10-pcs.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 7,
	'subcategories_id' => 31

	],
	[
	'name'        => 'aci wonder stainless steel scrubber',
	'quantity'    => '1-pcs',
	'price'       => 8,
	'subcategory' => 'kitchen cleaning',
	'category'    => 'home and cleaning',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/aci-wonder-stainless-steel-scrubber-1-pcs.png',
	'file_path' => 'images/products/',

	'image' => 'aci-wonder-stainless-steel-scrubber-1-pcs.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 7,
	'subcategories_id' => 32

	],
	[
	'name'        => 'vim dishwashing bar',
	'quantity'    => '300-gm',
	'price'       => 70,
	'subcategory' => 'kitchen cleaning',
	'category'    => 'home and cleaning',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/vim-dishwashing-bar-300-gm.png',
	'file_path' => 'images/products/',

	'image' => 'vim-dishwashing-bar-300-gm.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'popular',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 7,
	'subcategories_id' => 32

	],
	[
	'name'        => 'chaka advance lemon washing powder',
	'quantity'    => '500-gm',
	'price'       => 50,
	'subcategory' => 'laundry stuff',
	'category'    => 'home and cleaning',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/chaka-advance-lemon-washing-powder-500-gm.png',
	'file_path' => 'images/products/',

	'image' => 'chaka-advance-lemon-washing-powder-500-gm.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 7,
	'subcategories_id' => 33

	],
	[
	'name'        => 'bashundhara facial tissue chaldal logo',
	'quantity'    => '120x2-ply',
	'price'       => 80,
	'subcategory' => 'napkin and paper stuff',
	'category'    => 'home and cleaning',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/bashundhara-facial-tissue-120x2-ply.png',
	'file_path' => 'images/products/',

	'image' => 'bashundhara-facial-tissue-120x2-ply.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 7,
	'subcategories_id' => 34

	],
	[
	'name'        => 'bashundhara gold toilet tissue',
	'quantity'    => '1-pcs',
	'price'       => 300,
	'subcategory' => 'napkin and paper stuff',
	'category'    => 'home and cleaning',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/bashundhara-gold-toilet-tissue-1-pcs.png',
	'file_path' => 'images/products/',

	'image' => 'bashundhara-gold-toilet-tissue-1-pcs.png',

	'images'=>'tishu2.png,tishu3.png',
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 7,
	'subcategories_id' => 34

	],
	[
	'name'        => 'bombay sweets chanachur',
	'quantity'    => '300-gm',
	'price'       => 30,
	'subcategory' => 'biscuits and local cakes and chanacur',
	'category'    => 'snacks',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/bombay-sweets-chanachur-300-gm.png',
	'file_path' => 'images/products/',

	'image' => 'bombay-sweets-chanachur-300-gm.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 8,
	'subcategories_id' => 35

	],


	[
	'name'        => 'mrcookie butter coconut biscuits',
	'quantity'    => '220-gm',
	'price'       => 35,
	'subcategory' => 'biscuits and local cakes and chanacur',
	'category'    => 'snackes',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/mrcookie-butter-coconut-biscuits-220-gm.png',
	'file_path' => 'images/products/',

	'image' => 'mrcookie-butter-coconut-biscuits-220-gm.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 8,
	'subcategories_id' => 35

	],
	[
	'name'        => 'pran puffed rice muri',
	'quantity'    => '500-gm',
	'price'       => 40,
	'subcategory' => 'biscuits and local cakes and chanacur',
	'category'    => 'snackes',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/pran-puffed-rice-muri-500-gm.png',
	'file_path' => 'images/products/',

	'image' => 'pran-puffed-rice-muri-500-gm.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 8,
	'subcategories_id' => 35

	],
	[
	'name'        => 'cadbury dairy milk chocolate bubbly',
	'quantity'    => '50-gm',
	'price'       => 20,
	'subcategory' => 'candy chocolate',
	'category'    => 'snackes',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/cadbury-dairy-milk-chocolate-bubbly-50-gm.png',
	'file_path' => 'images/products/',

	'image' => 'cadbury-dairy-milk-chocolate-bubbly-50-gm.png',

	'images'=>null,
	 'stock'        => 20,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 8,
	'subcategories_id' =>36

	],
	[
	'name'        => 'mm peanut chocolate',
	'quantity'    => '45-gm',
	'price'       => 10,
	'subcategory' => 'candy chocolate',
	'category'    => 'snackes',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/mm-peanut-chocolate-45-gm.png',
	'file_path' => 'images/products/',

	'image' => 'mm-peanut-chocolate-45-gm.png',

	'images'=>null,
	 'stock'        => 50,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 8,
	'subcategories_id' => 36

	],
	[
	'name'        => 'bombay sweets mr twistx',
	'quantity'    => '22-gm',
	'price'       => 15,
	'subcategory' => 'chips and pretzels',
	'category'    => 'snackes',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/bombay-sweets-mr-twist-22-gm.png',
	'file_path' => 'images/products/',

	'image' => 'bombay-sweets-mr-twist-22-gm.png',

	'images'=>null,
	 'stock'        => 50,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 8,
	'subcategories_id' => 37

	],
	[
	'name'        => 'bombay sweets ring chips',
	'quantity'    => '20-gm',
	'price'       => 10,
	'subcategory' => 'chips and pretzels',
	'category'    => 'snackes',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/bombay-sweets-ring-chips-20-gm.png',
	'file_path' => 'images/products/',

	'image' => 'bombay-sweets-ring-chips-20-gm.png',

	'images'=>null, 
	'stock'        => 50,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 8,
	'subcategories_id' => 37

	],
	[
	'name'        => 'dekko horlicks cookies biscuit',
	'quantity'    => '270-gm',
	'price'       => 15,
	'subcategory' => 'cookies',
	'category'    => 'snackes',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/dekko-horlicks-cookies-biscuit-270-gm.png',
	'file_path' => 'images/products/',

	'image' => 'dekko-horlicks-cookies-biscuit-270-gm.png',

	'images'=>null,
	 'stock'        => 50,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 8,
	'subcategories_id' => 38

	],
	[
	'name'        => 'haque milk chocolate digestive biscuit',
	'quantity'    => '145-gm',
	'price'       => 50,
	'subcategory' => 'cookies',
	'category'    => 'snackes',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/haque-milk-chocolate-digestive-biscuit-145-gm.png',
	'file_path' => 'images/products/',

	'image' => 'haque-milk-chocolate-digestive-biscuit-145-gm.png',

	'images'=>null,
	 'stock'        => 50,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 8,
	'subcategories_id' => 38

	],
	[
	'name'        => 'noi salted green peas',
	'quantity'    => '128-gm',
	'price'       => 5,
	'subcategory' => 'local snacks',
	'category'    => 'snackes',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/noi-salted-green-peas-128-gm.png',
	'file_path' => 'images/products/',

	'image' => 'noi-salted-green-peas-128-gm.png',

	'images'=>null,
	 'stock'        => 50,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 8,
	'subcategories_id' => 39

	],
	[
	'name'        => 'pran badam bhaja 30-gm',
	'quantity'    => '4-pcs',
	'price'       => 300,
	'subcategory' => 'local snacks',
	'category'    => 'snackes',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/pran-badam-bhaja-30-gm-4-pcs.png',
	'file_path' => 'images/products/',

	'image' => 'pran-badam-bhaja-30-gm-4-pcs.png',

	'images'=>null, 
	'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 8,
	'subcategories_id' => 39

	],
	[
	'name'        => 'mrnoodles chicken cup noodles',
	'quantity'    => '40-gm',
	'price'       => 25,
	'subcategory' => 'noodles',
	'category'    => 'snackes',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/mrnoodles-chicken-cup-noodles-40-gm.png',
	'file_path' => 'images/products/',

	'image' => 'mrnoodles-chicken-cup-noodles-40-gm.png',

	'images'=>null, 
	'stock'        => 50,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'popular',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 8,
	'subcategories_id' =>40

	],
	[
	'name'        => 'cocola egg noodles',
	'quantity'    => '180-gm',
	'price'       => 20,
	'subcategory' => 'noodles',
	'category'    => 'snackes',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/cocola-egg-noodles-180-gm.png',
	'file_path' => 'images/products/',

	'image' => 'cocola-egg-noodles-180-gm.png',

	'images'=>null,
	 'stock'        => 50,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 8,
	'subcategories_id' => 40

	],
	[
	'name'        => 'dekko oyster pasta buy 2 get 1 free',
	'quantity'    => '200-gm',
	'price'       => 40,
	'subcategory' => 'pasta macaroni',
	'category'    => 'snackes',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/dekko-oyster-pasta-buy-2-get-1-free-200-gm.png',
	'file_path' => 'images/products/',

	'image' => 'dekko-oyster-pasta-buy-2-get-1-free-200-gm.png',

	'images'=>null,
	 'stock'        => 20,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'special',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 8,
	'subcategories_id' => 41

	],

	[
	'name'        => 'kolson macaroni shell',
	'quantity'    => '400-gm',
	'price'       => 300,
	'subcategory' => 'pasta macaroni',
	'category'    => 'snackes',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/kolson-macaroni-shell-400-gm.png',
	'file_path' => 'images/products/',

	'image' => 'kolson-macaroni-shell-400-gm.png',

	'images'=>null,
	 'stock'        => 5,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 8,
	'subcategories_id' => 41

	],

	[
	'name'        => 'heinz tomato ketchup',
	'quantity'    => '300-gm',
	'price'       => 65,
	'subcategory' => 'sauces and salad dressings',
	'category'    => 'snackes',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/heinz-tomato-ketchup-300-gm.png',
	'file_path' => 'images/products/',

	'image' => 'heinz-tomato-ketchup-300-gm.png',

	'images'=>null,
	 'stock'        => 20,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'popular',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 8,
	'subcategories_id' => 42

	],
	[
	'name'        => 'pran synthetic vinegar',
	'quantity'    => '650-ml',
	'price'       => 30,
	'subcategory' => 'sauces and salad dressings',
	'category'    => 'snackes',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/pran-synthetic-vinegar-650-ml.png',
	'file_path' => 'images/products/',

	'image' => 'pran-synthetic-vinegar-650-ml.png',

	'images'=>null,
	 'stock'        => 20,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 8,
	'subcategories_id' => 42

	],
	[
	'name'        => 'knorr soup thai',
	'quantity'    => '28-gm',
	'price'       => 12,
	'subcategory' => 'soups',
	'category'    => 'snackes',

	'short_desc'=>'Its a short description','des'      => 'Its a good item',
	'aditional_desc'=>'aditional-wait,aditional-unitprice,aditional-offer','gallery'   => 'images/products/knorr-soup-thai-28-gm.png',
	'file_path' => 'images/products/',

	'image' => 'knorr-soup-thai-28-gm.png',

	'images'=>null,
	 'stock'        => 20,
	'stock_status' => 'instock',

	'featured'  => 0,
	'condition' => 'hot',
	'status'    => 'active',
	'discount'  => 1.00,

	'categories_id'    => 8,
	'subcategories_id' =>43

	],


	]);
	}
	}