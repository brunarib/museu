<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoriasMuseusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias_museus',function(Blueprint $table){
			$table->integer('museuId')->unsigned();
			$table->integer('categoriasId')->unsigned();
			
			
			$table->foreign('museuId')
			->references('id')
			->on('museus')
			->onDelete('cascade');
			$table->foreign('categoriasId')
			->references('id')
			->on('categorias')
			->onDelete('cascade');
			
			
 
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('categoriasMuseus');
    }
}
