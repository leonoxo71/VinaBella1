<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Clientes', function (Blueprint $table) {
            $table->increments('Cod_cliente');
            $table->string('Nro_doc', 20)->unique()->nullable();
            $table->string('Nombre', 15);
            $table->string('Ap_paterno', 15);
            $table->string('Ap_materno', 15);
            $table->string('Telefono', 15);
            $table->string('Correo_electronico', 60);
            $table->string('Tipo_documento', 10)->nullable();
            $table->string('Calle_res', 30);
            $table->integer('Ciudad_res');

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
        Schema::dropIfExists('Clientes');
    }
}
