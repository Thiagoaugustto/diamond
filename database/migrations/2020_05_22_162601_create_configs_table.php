->nullalbel()<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateConfigsTable.
 */
class CreateConfigsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('configs', function(Blueprint $table) {
            $table->increments('id');
            $table->string('logo')->nullable(); 
            $table->string('icon')->nullable(); 
            $table->string('banner1')->nullable(); 
            $table->string('banner2')->nullable();  
            $table->string('banner3')->nullable(); 
            $table->string('newsletter')->nullable();
            $table->string('payment')->nullable(); 
            $table->string('whatsapp')->nullable(); 
            $table->string('facelink')->nullable(); 
            $table->string('instalink')->nullable();  

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
		Schema::dropIfExists('configs');
	}
}
