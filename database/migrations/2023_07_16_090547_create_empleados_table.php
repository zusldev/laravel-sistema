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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->String('nombre');
            $table->String('apellidoPaterno');
            $table->String('apellidoMaterno');
            $table->String('correo');
            $table->String('foto');
            $table->String('estado');
            $table->String('ciudad');
            $table->String('pais');
            $table->String('estadoCivil');
            $table->String('genero');
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
        Schema::dropIfExists('empleados');
    }
};
