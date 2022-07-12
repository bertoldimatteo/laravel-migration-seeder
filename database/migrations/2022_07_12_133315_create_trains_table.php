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

            $table->string('azienda', 30);
            $table->string('stazione di partenza', 50);
            $table->string('stazione di arrivo', 50);
            $table->dateTime('orario di partenza', $precision = 0);
            $table->dateTime('orario di arrivo', $precision = 0);
            $table->string('codice treno', 20);
            $table->string('numero carrozza', 5);
            $table->boolean('in orario')->default(true);
            $table->boolean('cancellato')->default(false);
            
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
