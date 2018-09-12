<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('Cod_usuario', 9)->primary();
            $table->string('Nom_usuario', 20);
            $table->string('Ap_paterno', 15);
            $table->string('Ap_materno', 15);
            $table->string('telefono', 15);
            $table->string('Correo_electronico', 60)->unique();
            $table->string('Identificacion', 15);
            $table->string('password', 15);
            $table->string('Direccion', 30);
            $table->tinyInteger('Nivel_acceso');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
