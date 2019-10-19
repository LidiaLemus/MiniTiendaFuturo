<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase__details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('quantity');
            $table->decimal('price',11,2);
            $table->decimal('subtotal',11,2);
            $table->bigInteger('purchase_id')->unsigned();
            $table->bigInteger('provider_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->timestamps();


            $table->foreign('purchase_id')->references('id')->on('purchases');
            $table->foreign('provider_id')->references('id')->on('providers');
            $table->foreign('product_id')->references('id')->on('products');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase__details');
    }
}
