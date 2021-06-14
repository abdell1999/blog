<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticuloCategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo_categoria', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('articulo_id')->unsigned();
            $table->integer('categoria_id')->unsigned();




            $table->foreign('articulo_id')->references('id')->on('articulos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('categoria_id')->references('id')->on('categorias')
                ->onDelete('cascade')
                ->onUpdate('cascade');




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
        Schema::dropIfExists('articulo_categoria');
    }
}
