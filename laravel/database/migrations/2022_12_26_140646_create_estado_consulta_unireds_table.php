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
        Schema::create('estado_consulta_unireds', function (Blueprint $table) {
            $table->integer('IdTicket');
            $table->String('Email');
            $table->String('IdTranccion');
            $table->integer('IdTarnsaccionUnired');
            $table->String('EstadoPago');
            $table->String('TipoPago');
            $table->integer('Monto');
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
        Schema::dropIfExists('estado_consulta_unireds');
    }
};
