<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStorekeepersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storekeepers', function (Blueprint $table) {
            $table->id();
            $table->string(Fname);
            
            $table->timestamps();
            $table->unsignedBigInteger('maneger_id');
            $table->foreign('maneger_id')
            ->reference('id')
            ->on('maneger')
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
        Schema::dropIfExists('storekeepers');
    }
}
