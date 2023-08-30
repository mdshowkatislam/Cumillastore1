<?php

use Illuminate\Support\Facades\Route;


use Illuminate\Support\Facades\Session;
use App\Http\Controllers\userController;

use App\Http\Controllers\frontendController;

use App\Http\Livewire\ContactComponent;

use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Livewire\ShopComponent;

use App\Http\Livewire\CheckoutComponent;

use App\Http\Livewire\HomeComponent;

use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CartComponent;

use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\DumyExample;
use App\Http\Livewire\FeaturedComponents;

Route::get('/', HomeComponent::class);

Route::get('/dumy',function(){
    $allkat=App\Models\Categories::all();
    return view('livewire\dumy-example',['allkat'=>$allkat]);
});
Route::get('getsubkat/{id}',function($id){
    $allsubkat=App\Models\subcategories::where('categories_id',$id)->get();
    return response()->json($allsubkat);
});

Route::get('/detail/{id}', DetailsComponent::class);


Route::get('/cart', CartComponent::class)->name('product.cart');
Route::get('/product-category/{category_slug}/{scategory_slug?}', CategoryComponent::class)->name('product.category');

Route::get('/search', SearchComponent::class)->name('product.search');
Route::get('/shop', ShopComponent::class);
Route::get('/checkout', CheckoutComponent::class)->name('checkout');

Route::get('/wishlist', WishlistComponent::class)->name('product.wishlist');
Route::get('/thank-you',ThankyouComponent::class)->name('thankyou');

Route::get('/contact-us', ContactComponent::class)->name('contact-us');

Route::post('subscribe',[frontendController::class,'subscribe'])->name('subscribe');
Route::get('about-us',[frontendController::class,'aboutus'])->name('about-us');
Route::get('contact',[frontendController::class,'contact'])->name('contact');

Route::get('/featured/{name}', FeaturedComponents::class)->name('featured');



require __DIR__.'/auth.php';
