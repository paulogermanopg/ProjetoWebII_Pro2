<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('password_resets')) {
            Schema::create('livros', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('adm_id')->default('adm');
                $table->string('nome');
                $table->string('estado');
                $table->string('autor');
                $table->string('categoria');
                $table->string('isbn');
                $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livros');
    }
}
