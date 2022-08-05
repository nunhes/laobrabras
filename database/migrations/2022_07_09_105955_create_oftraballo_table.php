<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOftraballoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oftraballos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('data');
            $table->string('nummeses');
            $table->string('numpostosofertados');
            $table->string('observacions');
            $table->string('posto');
            $table->string('accionsfe_id');
            $table->foreignId('id_empresa');
            $table->foreignId('categoriaprofesional_id');
            $table->string('estudiosminimos');
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
        Schema::dropIfExists('oftraballo');
    }
}
