<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstrutorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrutor', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nome",50);
            $table->string("cpf",20);
            $table->string("telefone",20);
            $table->string("endereço",100);
            $table->string("credencial",50);
            $table->date("data_venc");
            $table->string("email",50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instrutor');
    }
}
