<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReservacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Reservaciones', function (Blueprint $table) {
            $table->increments('Cod_reservacion');
            $table->integer('Cod_cliente');
            $table->string('Nro_doc_cli', 20);
            $table->string('Cod_usuario', 9);
            $table->DateTime('Fecha_reservacion');
            $table->DateTime('Fecha_inicio');
            $table->DateTime('Fecha_fin');
            $table->tinyInteger('Numero_personas');
            $table->Integer('Valor_noche_venta');
            $table->tinyInteger('Estado_reserva');
            $table->string('Tipo_reserva', 10);
            $table->DateTime('Fecha_check_in');
            $table->DateTime('Fecha_check_out');
            /*
            *$table->foreign('Cod_cliente')->references('Cod_cliente')->on('Clientes');
            *$table->foreign('Cod_usuario')->references('Cod_usuario')->on('users');
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
        Schema::dropIfExists('Reservaciones');
    }
}
