<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pedido_id');
            $table->unsignedInteger('evento_id');
            $table->unsignedInteger('cupom_desconto_id');
            $table->enum('status', ['RE', 'PA', 'CA']);
            $table->decimal('valor_a', 6, 2)->default(0);
            $table->decimal('desconto', 6, 2)->default(0);
            $table->string('qtd');
            $table->timestamps();

            $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->foreign('evento_id')->references('id')->on('eventos');
            $table->foreign('cupom_desconto_id')->references('id')->on('cupom_descontos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_produtos');
    }
}
