<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminAttributesComponent;
use App\Http\Livewire\Admin\AdminAddAttributesComponent;
 use App\Http\Livewire\Admin\AdminEditAttributeComponent;
 use App\Http\Livewire\Admin\AdminEditProductComponent;
 use App\Http\Livewire\Admin\vut2;

use App\Http\Livewire\User\UserDashboardComponent;

Route::get('getsubkat/{id}',function($id){
    $allsubkat=App\Models\subcategories::where('categories_id',$id)->get();
    return response()->json($allsubkat);
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// -------user dashbaoard-----------
 Route::middleware(['auth:sanctum', 'verified'])->group(function(){

    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});
// -------Admin dashbaoard-----------

  Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){

    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/edit/{product_id}', AdminEditProductComponent::class)->name('admin.editproduct');

    Route::get('/admin/product/vut2', Vut2::class)->name('admin.vut2');

    Route::get('/admin/attributes',AdminAttributesComponent::class)->name('admin.attributes');
    Route::get('/admin/attribute/add', AdminAddAttributesComponent::class)->name('admin.add_attribute');
    Route::get('/admin/attribute/edit/{attribute_id}',AdminEditAttributeComponent::class)->name('admin.edit.attribute');



});
