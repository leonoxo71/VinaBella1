<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTipoHabitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tipo_habitaciones', function (Blueprint $table) {
            $table->tinyInteger('Cod_tipo_habitacion')->primary();
            $table->string('Nom_tipo', 30);
            $table->tinyInteger('Capacidad_habitacion');
            $table->tinyInteger('Cantidad_baños');
            $table->string('tipo_baño', 30);
            $table->integer('Precio_noche');
            $table->tinyInteger('Cantidad_habitaciones');
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
        Schema::dropIfExists('Tipo_habitaciones');
    }
}
