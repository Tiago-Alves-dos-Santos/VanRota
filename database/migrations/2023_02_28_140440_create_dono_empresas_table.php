<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonoEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dono_empresas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('email_recovery')->unique();
            $table->string('profile_picture')->nullable();
            $table->string('password');
            $table->string('cep', 8);
            $table->string('estado');
            $table->string('cidade');
            $table->string('rua');
            $table->string('bairro');
            $table->int('numero');
            $table->text('complemento')->nullable();
            $table->boolean('active')->default(true);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dono_empresas');
    }
}
