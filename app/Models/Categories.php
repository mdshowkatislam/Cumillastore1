<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table="categories";
    protected $fillable=['id','title','slug','summary','photo','file_path'];

    public function subcategory(){

           return $this->hasMany(subcategories::class,'categories_id');

    }
    public function products(){

        return $this->hasManyThrough(products::class,subcategories::class);
    }





}
