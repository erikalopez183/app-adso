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
        Schema::create('informacion_de_impuestos', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('id_empresa');
 
            //$table->foreign('user_id')->references('id')->on('users');
            $table->foreign('id_empresa')->references('id')->on('empresas');

            //$table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('id_tipo_declaracion');
 
            //$table->foreign('user_id')->references('id')->on('users');
            $table->foreign('id_tipo_declaracion')->references('id')->on('tipo_de_declaracions');

            //$table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('id_periodicidad_declaracion');
 
            //$table->foreign('user_id')->references('id')->on('users');
            $table->foreign('id_periodicidad_declaracion')->references('id')->on('periodicidad_declaracions');
            $table->date('fecha_vencimiento_impuestos');
            $table->date('fecha_entrega_revision');

             //$table->unsignedBigInteger('user_id');
             $table->unsignedBigInteger('id_tercero');
 
             //$table->foreign('user_id')->references('id')->on('users');
             $table->foreign('id_tercero')->references('id')->on('terceros');

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
        Schema::dropIfExists('informacion_de_impuestos');
    }
};
