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
        Schema::create('lancamentos', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('convenio');
                $table->string('servico');
                $table->string('data');
                $table->string('hora');
                $table->string('telefone');
                $table->integer('confirmacao');
                $table->decimal('valor', 10, 2);
                $table->string('mes');
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
        Schema::dropIfExists('lancamentos');
    }
};
