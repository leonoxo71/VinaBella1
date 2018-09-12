<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDiasReservadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dias_reservadas', function (Blueprint $table) {
            $table->increments('Cod_dia_reservada');
            $table->integer('Cod_reservacion');
            $table->tinyinteger('Cod_habitacion');
            $table->DateTime('Fecha_reservada');
            $table->tinyinteger('Estado_asignacion');

            /*
            *$table->foreign('Cod_reservacion')->references('Cod_reservacion')->on('Reservaciones');
            *$table->foreign('Cod_habitacion')->references('Cod_habitacion')->on('Habitaciones');
            */
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
        Schema::dropIfExists('dias_reservadas');
    }
}
