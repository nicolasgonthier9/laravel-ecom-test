<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table)
        {
            $table->id()->autoIncrement();
            $table->string('name', 64);
            $table->decimal('price',6);
            $table->longText('desc');
            $table->decimal('weight', 5);
            $table->integer('stock');
        });
    }

    /**
     * Reverse the migrations.
     *
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
