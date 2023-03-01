<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricoVersaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico_versaos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('termo_de_uso_id')->unsigned()->nullable();
            $table->string('versao');
            $table->text('descricao');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->foreign('termo_de_uso_id')->references('id')->on('termos_de_usos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historico_versaos');
    }
}
