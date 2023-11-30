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
        Schema::create('reservation', function (Blueprint $table)  {
            $table->id();
            $table->string('prenom');
            $table->string('nom');
            $table->string('num_telephone');
            $table->string('email');
            $table->date('date_reservation');
            $table->unsignedBigInteger('prestation_id');
            $table->foreign('prestation_id')->references('id')->on('prestations');
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
        Schema::dropIfExists('reservation');
    }
};
