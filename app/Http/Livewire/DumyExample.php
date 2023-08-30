<?php
namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Categories;
use App\Models\subcategories;
use Database\Seeders\SubcategoriesSeeder;

class DumyExample extends Component
{

    public function render()
    {
       $categories = Categories::all();
           return view('livewire.dumy-example',compact('categories'))->layout('layouts.base');
    }
}
