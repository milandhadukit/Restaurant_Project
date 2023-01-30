<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_tables', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mobile');
            $table->integer('table_no');
            $table->time('time');
            $table->date('date');
            $table->string('type');
            $table->string('descreption')->nullable();
            $table->enum('status', ['1', '0','-1'])->default(1)->comment("1=pandding,0=complate,-1=close")->nullable();
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('book_tables');
    }
}
