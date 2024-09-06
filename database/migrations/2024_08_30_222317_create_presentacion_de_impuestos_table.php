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
        Schema::create('presentacion_de_impuestos', function (Blueprint $table) {
            $table->id();
             //$table->unsignedBigInteger('user_id');
           $table->unsignedBigInteger('id_empresa');
 
           //$table->foreign('user_id')->references('id')->on('users');
           $table->foreign('id_empresa')->references('id')->on('empresas');

           //$table->unsignedBigInteger('user_id');
           $table->unsignedBigInteger('id_revision_impuestos');
 
           //$table->foreign('user_id')->references('id')->on('users');
           $table->foreign('id_revision_impuestos')->references('id')->on('revision_impuestos');

           $table->date('fecha_presentacion_impuesto');
           $table->string('observaciones');      
            
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
        Schema::dropIfExists('presentacion_de_impuestos');
    }
};
