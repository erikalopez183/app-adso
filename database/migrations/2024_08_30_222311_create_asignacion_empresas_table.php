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
        Schema::create('asignacion_empresas', function (Blueprint $table) {
            $table->id();
              //$table->unsignedBigInteger('user_id');
              $table->unsignedBigInteger('id_empresa');
 
              //$table->foreign('user_id')->references('id')->on('users');
              $table->foreign('id_empresa')->references('id')->on('empresas');
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
        Schema::dropIfExists('asignacion_empresas');
    }
};
