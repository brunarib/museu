<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMuseusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('museus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dsc_museu',200);
			$table->text('historia');
			$table->string('telefone',20)->nullable();
			$table->string('email',100)->nullable();
			$table->string('link',200)->nullable();
			$table->string('endereco')->nullable();
			$table->integer('api')->nullable();
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('museus');
    }
}
