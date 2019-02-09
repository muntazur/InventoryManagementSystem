<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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

            $table->increments('pid');
            $table->string('name')->unique();

            $table->integer('cid')->unsigned();
            $table->integer('bid')->unsigned();

            $table->foreign('cid')->references('cid')->on('categories');
            $table->foreign('bid')->references('bid')->on('brands');


            $table->double('price');
            $table->integer('quantity');
            $table->enum('status',['0','1']);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
