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
            $table->text('azienda');
            $table->text('stazione_di_partenza');
            $table->text('stazione_di_arrivo');
            $table->date('orario_di_partenza');
            $table->date('orario_di_partenza');
            $table->text('codice_treno');
            $table->int('numero_carrozze');	
            $table->boolean('in_orario');
            $table->boolean('cancellato');  
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
