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
        Schema::create('terceros', function (Blueprint $table) {
            $table->id();
             //$table->unsignedBigInteger('user_id');
             $table->unsignedBigInteger('id_tipo_de_documento');
 
             //$table->foreign('user_id')->references('id')->on('users');
             $table->foreign('id_tipo_de_documento')->references('id')->on('tipo_de_documentos');
             $table->integer('numero');                       
             $table->string('primer_nombre');
             $table->string('segundo_nombre');
             $table->string('primer_apellido');
             $table->string('segundo_apellido');
             $table->string('correo_electronico');
             $table->string('direccion');
             $table->string('telefono');
             //$table->unsignedBigInteger('user_id');
             $table->unsignedBigInteger('id_cargo');
 
             //$table->foreign('user_id')->references('id')->on('users');
             $table->foreign('id_cargo')->references('id')->on('cargos');
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
        Schema::dropIfExists('terceros');
    }
};
