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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_internaute');
            $table->unsignedBigInteger('id_hotel');
            $table->date('date_debut_sejour');
            $table->date('date_fin_sejour');
            $table->string('titre');
            $table->timestamps();
            
            // Define foreign key constraints
            $table->foreign('id_internaute')->references('id')->on('internautes');
            $table->foreign('id_hotel')->references('id')->on('hotels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
