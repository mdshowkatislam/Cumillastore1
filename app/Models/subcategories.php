<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcategories extends Model
{
    use HasFactory;
    protected $table='subcategories';
    protected $fillable=['id','name','slug','categories_id','photo','file_path'];

    public function category()
    {
      return  $this->belongsTo(Categories::class,'categories_id');
    }

    public function products(){

        return $this->hasMany(products::class);
    }
}
