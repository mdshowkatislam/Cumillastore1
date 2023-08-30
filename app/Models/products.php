<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class products extends Model
{
    use \Znck\Eloquent\Traits\BelongsToThrough;
    use HasFactory;
    protected $table="products";
    protected $fillable=['id','name','quantity','price','subcategory','category','short-desc','des','aditional-desc','gallery','file_path','image','images','stock','stock_status','featured','condition','status','discount','categories_id','subcategories_id'];
    // custom property accessor for currency
    protected $appends=['pws'];
    public function getPWSAttribute(){
        return '৳' .$this->price;
    }



    public function category(){
        return $this->belongsToThrough(Categories::class,subcategories::class);
    }
    public function subcategory(){
       return $this->belongsTo(subcategories::class,'subcategories_id');
    }



       public function order_items(){
                  return $this->hasMany(order_items::class,'product_id');
       }

}
