<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('rota_atual_id')->unsigned()->nullable();
            $table->bigInteger('cobrador_id')->unsigned()->nullable();
            $table->bigInteger('motorista_id')->unsigned()->nullable();
            $table->string('placa');
            $table->string('marca');
            $table->string('modelo');
            $table->string('nome');
            $table->enum('rota_status',['aguardando','em_andamento','finalizada'])->nullable();
            $table->enum('tipo_transporte',['van','carro'])->default('van');
            $table->string('local_atual')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->foreign('rota_atual_id')->references('id')->on('rotas');
            $table->foreign('cobrador_id')->references('id')->on('rotas');
            $table->foreign('motorista_id')->references('id')->on('rotas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transportes');
    }
}
