<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nombre');
            $table->string('propietario');
            $table->string('ruc');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('celular')->nullable();
            $table->string('foto')->nullable();
            $table->string('email')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('estado')->default(true);
            $table->string('iva')->default(12);

            /*un cliente tiene varias empresa*/
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa');
    }
}
