<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('nameProduct', 100);
            $table->integer('amount');
            $table->integer('idManufacture' )->references('manu_id')->on('manufacture');
            $table->integer('idProtype' )->references('protype_id')->on('protype');
            $table->float('price',50);
            $table->longText('description');
            $table->string('image',500);
            $table->integer('feature');
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
        Schema::dropIfExists('product');
    }
}
