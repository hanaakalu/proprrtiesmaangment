<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('model');
            $table->string('unit');
            $table->double('price');
            $table->integer('quantity');
           $table->timestamps();
           $table->unsignedBigInteger('Storekeeper_id');
           $table->foreign('Storekeeper_id')
           ->references('id')
           ->on('Storekeeper')
           ->onDelete('cascade');
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
