<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliacaoEmpresaDonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacao_empresa_donos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('transporte_id')->unsigned()->nullable();
            $table->bigInteger('motorista_id')->unsigned()->nullable();
            $table->bigInteger('cobrador_id')->unsigned()->nullable();
            $table->bigInteger('cliente_avaliador_id')->unsigned()->nullable();
            $table->double('nota', 3,1);
            $table->text('feedback')->nullable();
            $table->enum('avaliado', ['transporte','motorista','cobrador']);
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->foreign('transporte_id')->references('id')->on('transportes');
            $table->foreign('motorista_id')->references('id')->on('motoristas');
            $table->foreign('cobrador_id')->references('id')->on('cobradores');
            $table->foreign('cliente_avaliador_id')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaliacao_empresa_donos');
    }
}
