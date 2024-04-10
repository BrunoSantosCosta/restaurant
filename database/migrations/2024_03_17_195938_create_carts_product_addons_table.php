<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts_product_addons', function (Blueprint $table) {
            $table->id();
            $table->integer('id_order');
            $table->integer('quantity');
            $table->string('price');
            $table->integer('id_product');
            $table->integer('id_addon');
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
        Schema::dropIfExists('carts_product_addons');
    }
};
