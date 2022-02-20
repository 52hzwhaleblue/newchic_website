<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {

          
           
          

            $table->string('id')->primary();
            $table->string('userID');
            $table->string('productSKU');
            $table->string('productName');
            $table->integer('productPrice');
            $table->string('productImage');
            $table->integer('quantity');
            $table->integer('sub_total');
            $table->integer('status');
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
        Schema::dropIfExists('carts');
    }
}