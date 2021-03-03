<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrinhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrinhos', function (Blueprint $table) {
            $table->id();

            $table->UnsignedBigInteger('user');
            $table->UnsignedBigInteger('produto');

            //indicação de chave estrangeira
            $table-> foreign('user')
            ->references('id')
            ->on('users');
            //indicação de chave estrangeira
            $table->foreign('produto')
            ->references('id')
            ->on('produtos');

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
        Schema::dropIfExists('carrinhos');
    }
}
