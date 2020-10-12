<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCupomDescontosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cupom_descontos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('localizador')->nullable();
            $table->string('desconto')->nullable();
            $table->enum('modo_desconto', ['valor', 'porc'])->default('porc');
            $table->string('limite')->nullable();
            $table->enum('modo_limite', ['valor', 'qtd'])->default('qtd');
            $table->dateTime('dthr_validade')->nullable();
            $table->enum('ativo', ['S', 'N'])->default('S');
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
        Schema::dropIfExists('cupom_descontos');
    }
}
