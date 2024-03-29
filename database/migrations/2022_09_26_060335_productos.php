<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('productos', function (Blueprint $table) {

            $table->engine="innoDB";

            $table->id();
            $table->bigInteger('usuario_id')->unsigned();
            $table->bigInteger('categoria_id')->unsigned();
            $table->string('nombre');
            $table->string('descripcion');
            $table->float('stock');
            $table->float('precio');
            $table->string('foto');
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete("cascade");
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
