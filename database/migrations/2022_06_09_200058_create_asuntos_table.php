<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsuntosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asuntos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->longText('description');
            $table->date('datainicio');

            $table->string('codigo')->nullable();
            $table->float('coste', 10, 2);
            $table->boolean('costeasoc');
            $table->date('datafin')->nullable();
            // $table->date('datainicio')->nullable(); due_at
            // $table->string('description')->nullable(); body
            // $table->string('name'); reempraza nome -> title
            $table->integer('nummatriculadostotal');
            $table->integer('nummatriculadosweb');
            $table->boolean('needssanitario')->nullable();
            $table->foreignId('programa_id')->nullable();

            $table->foreignId('user_id');

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
        Schema::dropIfExists('asuntos');
    }
}
