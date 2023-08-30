<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
               
            $table->string('name');
            $table->string('slug');
            $table->bigInteger('categories_id')->unsigned();

         
            $table->string('photo')->nullable();
            $table->string('file_path')->nullable();


            $table->timestamps();
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('subcategories');
    }
}