<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_size', function (Blueprint $table) {
            $table->id();
            $table->decimal('purchase_price', 15, 4);
            $table->decimal('sell_price', 15, 4);
            $table->string('discount_type')->nullable();
            $table->decimal('discount', 15, 4)->nullable();
            $table->string('discount_start_date')->nullable();
            $table->string('discount_end_date')->nullable();
            // $table->boolean('active')->default(1);
			$table->integer('product_id')->unsigned()->nullable();
            $table->integer('size_id')->unsigned();
            // $table->foreign('product_id')->references('id')->on('products')
			// 			->onDelete('cascade');
            // $table->foreign('size_id')->references('id')->on('sizes')
			// 			->onDelete('cascade');
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
        Schema::dropIfExists('product_size');
    }
}
