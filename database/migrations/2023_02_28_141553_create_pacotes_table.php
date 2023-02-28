<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacotes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cliente_remetente')->unsigned();
            $table->bigInteger('cliente_destinatrio')->unsigned()->nullable();
            $table->string('nome');
            $table->string('cidade_partida');
            $table->string('cidade_entrega');
            $table->string('destinario_nome');
            //nullable pq as vezes as pessoas sabem informar mais o complemento doq o endereço exato
            $table->string('rua')->nullable();
            $table->string('bairro')->nullable();
            $table->string('numero')->nullable();
            $table->text('complemento_entrega');
            $table->text('descricao_conteudo')->nullable();
            $table->text('motivo_erro_entrega')->nullable();
            $table->double('valor', 8, 2);
            //valor_final = valor + valor_taxa
            $table->double('valor_final', 8, 2);
            $table->enum('status',['pedido_enviado','pedido_aceito','pedido_cancelado','em_transporte','entregue','nao-entregue'])->default('pedido_enviado');
            $table->enum('tipo_envio',['enviar','receber'])->default('enviar');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->foreign('cliente_remetente')->references('id')->on('clientes');
            $table->foreign('cliente_destinatrio')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacotes');
    }
}
