<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Categories;
use App\Models\subcategories;

class AdminCategoryComponent extends Component
{
    use WithPagination;

    public function deleteCategory($id)
    {
        $category = Categories::find($id);
        $category->delete();
        session()->flash('message', 'Category has been deleted successfully! ');
    }

    public function deleteSubcategory($id)
    {
        $scategory = subcategories::find($id);
        $scategory->delete();
        session()->flash('message', 'Subcategory has been deleted successfully! ');

    }

    public function render()
    {
        $categories = Categories::paginate(8);
        return view('livewire.admin.admin-category-component',['categories'=>$categories])->layout('layouts.base');
    }
}
