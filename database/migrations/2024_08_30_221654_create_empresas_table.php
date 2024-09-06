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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('id_tipo_de_documento');
 
            //$table->foreign('user_id')->references('id')->on('users');
            $table->foreign('id_tipo_de_documento')->references('id')->on('tipo_de_documentos');
            $table->integer('numero'); 
            //$table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('id_clasificacion_tributaria');
 
            //$table->foreign('user_id')->references('id')->on('users');  
            $table->foreign('id_clasificacion_tributaria')->references('id')->on('clasificacion_tributarias');
            
            $table->string('nombre o razon social');
            $table->string('direccion');
            $table->string('telefono');
              //$table->unsignedBigInteger('user_id');
              $table->unsignedBigInteger('id_ciudad');
 
              //$table->foreign('user_id')->references('id')->on('users');
              $table->foreign('id_ciudad')->references('id')->on('ciudads');
              $table->string('correo_electronico');
              $table->date('fecha_inicio_encargo');
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
        Schema::dropIfExists('empresas');
    }
};
