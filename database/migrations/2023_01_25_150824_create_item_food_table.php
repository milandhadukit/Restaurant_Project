<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_food', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('descreption')->nullable();
            $table->decimal('price', 9, 3);
            $table->string('discount_price')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('category_id');  
            $table->foreign('category_id')->references('id')->on('food_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('status', ['1', '0', '-1'])->default(0)->comment("1=active,0=deactive,-1=off discount_price")->nullable();
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
        Schema::dropIfExists('item_food');
    }
}
