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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                  ->nullable()
                  ->constrained()
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreignId('category_id')
                  ->constrained()
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreignId('sub_category_id')
                  ->nullable()
                  ->constrained()
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->text('title');
            $table->text('slug_unique')->nullable();
            $table->string('image')->nullable();
            $table->string('image_url')->nullable();
            $table->string('sku');
            $table->integer('stock');
            $table->integer('purchase_price')->nullable();
            $table->integer('intial_stock')->nullable();
            $table->integer('left_stock')->nullable();
            $table->text('description');
            $table->string('product_tag')->nullable();
            $table->text('specification');
            $table->integer('banner')->nullable();
            $table->integer('featured')->nullable();
            $table->integer('trending')->nullable();
            $table->integer('status')->default('1');
            $table->integer('softDelete')->default('1');
            $table->integer('deals_of_the_day')->nullable();
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
        Schema::dropIfExists('products');
    }
};
