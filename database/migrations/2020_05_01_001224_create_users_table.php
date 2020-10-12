<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable.
 */
class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
            $table->increments('id');

            //people data
            $table->string('name', 50);
            $table->char('phone')->nullable();
            $table->char('telephone')->nullable();
            $table->string('cpf', 14)->unique()->nullable();
            $table->string('rg', 14)->unique()->nullable();
            $table->string('birth')->nullable();
			$table->string('country')->nullable();
			$table->char('cep')->nullable();
			$table->string('address')->nullable();
			$table->char('number')->nullable();
			$table->string('complement')->nullable();
			$table->string('neighborhood')->nullable();
			$table->string('city')->nullable();
			$table->string('state')->nullable();

            //auth data
            $table->string('email', 80)->unique();
            $table->string('password', 254);

            //$table->rememberToker();
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
		Schema::table('users', function(Blueprint $table) {

		});

		Schema::drop('users');
	}
}
