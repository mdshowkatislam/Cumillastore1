<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\products;
use App\Models\Categories;

use App\Models\subcategories;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;
    public $product_id;
    public $name;
    public $quantity;
    public $price;
    public $subcategory;
    public $category;
    public $short_desc;
    public $des;
    public $aditional_desc;
    public $gallery;
    public $file_path;
    public $image;
    public $images;
    public $newimage;
    public $newimages;
    public $stock;
    public $stock_status;
    public $featured;
    public $condition;
    public $status;
    public $discount;
    public $categories_id;
    public $scategories_id;


    public function mount($product_id)
    {
        $product = products::where('id', $product_id)->first();
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->quantity = $product->quantity;
        $this->price = $product->price;
        $this->scategory = $product->subcategory;
        $this->category = $product->category;


        $this->short_desc = $product->short_desc;
        $this->des= $product->des;
        $this->aditional_desc= $product->aditional_desc;
        $this->gallery = $product->gallery;
        $this->file_path = $product->file_path;
        $this->image = $product->image;
        $this->images = explode(",", $product->images);
        $this->newimage = $product->newimage;
        $this->condition = $product->condition;
        $this->stock= $product->stock;
        $this->stock_status = $product->stock_status;
        $this->featured = $product->featured;


        $this->condition= $product->condition;
        $this->status= $product->status;

        $this->discount = $product->discount;
        $this->categories_id = $product->categories_id;
        $this->scategories_id = $product->subcategories_id;




    }



    public function updated($fields)
    {

        $this->validateOnly($fields,[
            'name' => 'required',

            'short_desc' => 'required',
            'des' => 'required',
            'price' => 'required|numeric',



            'stock_status' => 'required',
            'quantity' => 'required',



        ]);





        if($this->newimage)
        {
            $this->validateOnly($fields,[
                'newimage' => 'required|mimes:jpeg,png',
            ]);
        }
    }

    public function updateProduct()
    {
        $this->validate([
            'name' => 'required',

            'short_desc' => 'required',
            'des' => 'required',
            'price' => 'required|numeric',
            'stock_status' => 'required',
            'quantity' => 'required',
            'categories_id' => 'required',

        ]);
        if($this->newimage)
        {
            $this->validate([
                'newimage' => 'required|mimes:jpg,jpeg,png',
            ]);
        }

        $product = products::find($this->product_id);
        $product->name = $this->name;
        $product->quantity = $this->quantity;
        $product->price = $this->price;
        $product->subcategory = $this->scategory;
        $product->category = $this->category;
        $product->short_desc = $this->short_desc;
        $product->des= $this->des;
        $product->aditional_desc= $this->aditional_desc;
        $product->gallery= $this->gallery;
        $product->file_path = $this->file_path;
        $product->stock= $this->stock;
        $product->stock_status = $this->stock_status;
        $product->status = $this->status;
        $product->featured = $this->featured;
        $product->condition = $this->condition;
        $product->discount = $this->discount;


        if($this->newimage)
        {
            unlink('images/products'.'/'.$product->image);


             $imageName = $this->newimage->getClientOriginalName();

            $this->newimage->storeAs('images/products',$imageName);



            $product->image = $imageName;
        }

        if($this->newimages)
        {
            if($product->images)
            {
                $images = explode(",", $product->images);
                foreach($images as $image)
                {
                    if($image)
                    {
                        unlink('images/products'.'/'.$image);
                    }
                }
            }

            $imagesname = '';
            foreach($this->newimages as $key=>$image)
            {


                $imgName = $image->getClientOriginalName();
                // $image->move(public_path('images/products'),$imgName);
                  $image->storeAs('images/products',$imgName);
                $imagesname = $imagesname . ',' . $imgName;
            }
            $product->images = $imagesname;
        }
        $product->categories_id = $this->categories_id;

        if($this->scategories_id)
        {
            $product->subcategories_id = $this->scategories_id;
        }
        $product->save();
        session()->flash('message','Product has been updated successfully!');
    }





    public function render()
    {
        $categories = Categories::all();


        return view('livewire.admin.admin-edit-product-component',compact('categories'))->layout('layouts.base');
    }
}
