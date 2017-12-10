<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_code');
            $table->string('item_description')->nullable();
            $table->string('uom');
            $table->string('purchase_information')->nullable();
            $table->string('sales_information')->nullable();
            $table->integer('buying_price');
            $table->integer('selling_price');
            $table->string('type')->nullable();
            $table->string('category')->nullable();
            $table->integer('qty')->nullable();
            $table->integer('amount')->nullable();
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
        Schema::dropIfExists('items');
    }
}
