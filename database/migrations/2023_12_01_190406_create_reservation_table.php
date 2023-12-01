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
            $table->date('date_reservation');
            $table->foreignId('prestations_id')->constrained('prestations');
            $table->foreignId('clients_id')->constrained('clients');
            $table->foreignId('admin_id')->constrained('admin');
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
