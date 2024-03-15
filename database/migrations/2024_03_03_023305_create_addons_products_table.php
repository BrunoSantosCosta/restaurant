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
        Schema::create('addons_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->integer('max_quantity');
            $table->timestamps();
            $table->foreignId('id_product')->constrained('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addons_products');
    }
};
