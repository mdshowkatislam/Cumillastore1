<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('quantity');
            $table->decimal('price');
            $table->String('subcategory');
            $table->String('category');
            $table->String('short_desc')->nullable();
            $table->String('des')->nullable();
            $table->String('aditional_desc')->nullable();
            $table->String('gallery')->nullable();
            $table->String('file_path')->nullable();
            $table->String('image')->nullable();
            $table->text('images')->nullable();
            $table->integer('stock')->default(1);
            $table->enum('stock_status',['instock','outofstock']);
            $table->boolean('featured')->default(false);
            $table->enum('condition',['default','new','hot','special','popular'])->default('default');
            $table->enum('status',['active','inactive'])->default('inactive');
            $table->float('discount')->nullabale();
            $table->bigInteger('categories_id')->unsigned()->nullable();
            $table->bigInteger('subcategories_id')->unsigned()->nullable();   
               
            $table->timestamps();

            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade'); 
            $table->foreign('subcategories_id')->references('id')->on('subcategories')->onDelete('cascade');
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('products');
    }
}