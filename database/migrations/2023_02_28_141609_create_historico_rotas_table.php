<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricoRotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico_rotas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('rota_id')->unsigned();
            $table->bigInteger('transporte_id')->unsigned();
            $table->bigInteger('motorista_id')->unsigned();
            $table->bigInteger('cobrador_id')->unsigned();
            $table->time('hora_inicio_rota');
            $table->string('hora_fim_rota');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->foreign('rota_id')->references('id')->on('rotas');
            $table->foreign('transporte_id')->references('id')->on('transportes');
            $table->foreign('motorista_id')->references('id')->on('motoristas');
            $table->foreign('cobrador_id')->references('id')->on('cobradores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historico_rotas');
    }
}
