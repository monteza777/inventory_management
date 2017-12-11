<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosHeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pos_heads', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('vat', 5,2)->nullable();
            $table->decimal('discount', 5,2)->nullable();
            $table->string('mode_of_payment');
            $table->decimal('cumulative_amount',5,2)->nullable(); // price if there's a vat or discount
            $table->decimal('amount_tendered',5,2); // total amount
            $table->decimal('change_due',5,2);
            $table->string('customer_name')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('customer_email')->nullable();
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
        Schema::dropIfExists('pos_heads');
    }
}
