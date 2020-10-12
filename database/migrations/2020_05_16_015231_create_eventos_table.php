<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateEventosTable.
 */
class CreateEventosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('eventos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('name');
            $table->string('name_pos')->nullable();
            $table->string('start')->nullable();
            $table->string('address')->nullable();
            $table->char('age')->nullable();
            $table->string('date')->nullable();
            $table->string('link')->nullable();
		$table->string('city')->nullable();
		$table->string('state')->nullable();
		$table->string('place')->nullable();
		$table->string('gate_opening')->nullable();                        
            $table->string('scaner_password')->nullable();
            $table->string('start_time')->nullable();
            $table->string('closing_time')->nullable();
            $table->text('description')->nullable();
            $table->string('url_video')->nullable();
            $table->string('area')->nullable();
            $table->string('lote')->nullable();      
            $table->string('qtd')->nullable();
            $table->string('tipo_a')->nullable();
            $table->decimal('valor_a', 6, 2)->nullable();
            $table->decimal('taxa_a', 6, 2)->nullable();
            $table->string('tipo_b')->nullable();
            $table->decimal('valor_b', 6, 2)->nullable();
            $table->decimal('taxa_b', 6, 2)->nullable();
            $table->string('area_v')->nullable();
            $table->string('lote_v')->nullable();      
            $table->string('qtd_v')->nullable();
            $table->string('tipo_v')->nullable();
            $table->decimal('valor_v', 6, 2)->nullable();
            $table->decimal('taxa_v', 6, 2)->nullable();
            $table->enum('ativo', ['S', 'N'])->default('S');

            $table->timestamps();
            $table->softDeletes();

            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('eventos');
	}
}
