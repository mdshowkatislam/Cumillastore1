<?php
namespace App\Http\Livewire\Admin;
use Livewire\Component;
use App\Models\Categories;
use App\Models\subcategories;

class Vut2 extends Component
{  public $category=null;
    public $scat=null;
    public $subcategories=null;


    // public function updatedCategory($cid)
    // {
    //      $this->scat=subcategories::where('categories_id',$cid)->get();
    // }
    public function render()
    {
       $categories = Categories::all();
           return view('livewire.admin.vut2',compact('categories'))->layout('layouts.base');
    }
}
