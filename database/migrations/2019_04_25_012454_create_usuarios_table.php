<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsuariosTable.
 */
class CreateUsuariosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table) {
            $table->increments('id');
			$table->string('nome',50);
			$table->string('email',80)->unique();
			$table->date('data_nascimento')->nullable();
			$table->string('rg',9)->unique()->nullable();
			$table->string('cpf',11)->unique()->nullable();
			$table->string('genero',1)->nullable();
			$table->string('senha',254)->nullable();
			$table->string('status')->default('ativo');
			$table->rememberToken();
			$table->softDeletes();
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
		Schema::table('usuarios', function(Blueprint $table) {

		});
		Schema::drop('usuarios');
	}
}
