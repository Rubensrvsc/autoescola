<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecepcionistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recepcionista', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nome",50);
            $table->string("email",50);
            $table->string("cpf",20);
            $table->string("telefone",20);
            $table->string("endereco",100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recepcionistas');
    }
}
