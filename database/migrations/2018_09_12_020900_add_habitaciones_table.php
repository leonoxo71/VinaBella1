<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHabitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Habitaciones', function (Blueprint $table) {
            $table->tinyInteger('Cod_habitacion')->primary();
            $table->string('Nom_hab', 30);
            $table->string('Posicion', 40);
            $table->tinyInteger('Cod_tipo_habitacion');
            $table->tinyInteger('Estado_hab');
            /*
            *$table->foreign('Cod_tipo_habitacion')->references('Cod_tipo_habitacion')->on('Tipo_habitaciones');
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
        Schema::dropIfExists('Habitaciones');
    }
}
