<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfformacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offormacions', function (Blueprint $table) {
            $table->id();
            $table->string('dataata');
            $table->string('datadende');
            $table->string('lugar');
            $table->string('nome');
            $table->string('numhoras');
            $table->string('numprazas');
            $table->string('tipo')->nullable()->change();
            $table->string('accionsfe_id')->unsigned()->nullable()->change();
            $table->string('id_empresa')->unsigned()->nullable()->change();
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
        Schema::dropIfExists('offormacion');
    }
}
