<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
          /*   $table->string('azienda', 100)->nullable();
            $table->string('stazione_di_partenza', 100)->nullable();
            $table->string('stazione_di_arrivo', 100)->nullable();
            $table->string('azienda', 100)->nullable()->nullable();
            $table->dateTime('orario_di_partenza', 0)->nullable();
            $table->dateTime('orario_di_arrivo', 0)->nullable();
            $table->string('codice_treno', 100)->nullable();
            $table->integer('numero_carrozze')->nullable();	
            $table->boolean('in_orario')->nullable();
            $table->boolean('cancellato')->nullable(); */
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
        Schema::dropIfExists('trains');
    }
}
