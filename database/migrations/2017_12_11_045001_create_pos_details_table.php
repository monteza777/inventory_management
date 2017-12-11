<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pos_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pos_head_id');
            $table->string('item_code');
            $table->string('item_name');
            $table->integer('available_quantity');
            $table->decimal('unit_price',5,2);
            $table->integer('qty')->default(1);
            $table->decimal('total_price',5,2);
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
        Schema::dropIfExists('pos_details');
    }
}
