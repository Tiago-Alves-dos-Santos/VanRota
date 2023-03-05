<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
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
            $table->string('name');
            $table->string('company_picture')->nullable();
            $table->string('cep', 8);
            $table->string('estado');
            $table->string('cidade');
            $table->string('rua');
            $table->string('bairro');
            $table->integer('numero');
            $table->text('complemento')->nullable();
            $table->date('mensalidade_data');
            $table->double('valor_mensalidade',8,2);
            //para isso ser true necessario ter ceterza que tem internet na estrada
            $table->boolean('mostrar_rota_atual')->default(false);
            $table->enum('mensalidade_status',['paga','pendente','vencida'])->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at');
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
}
