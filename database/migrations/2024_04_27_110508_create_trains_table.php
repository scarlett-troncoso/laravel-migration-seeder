<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->tinyText('azienda', 150); // tinyTExt fino a 255 caratteri
            $table->string('stazione_partenza', 255);
            $table->string('stazione_arrivo', 255);
            $table->dateTime('orario_partenza');
            $table->dateTime('orario_arrivo');
            $table->string('durata_totale', 15);
            $table->unsignedTinyInteger('codice_treno');
            $table->unsignedTinyInteger('carrozza')->nullable(); //nullable perche la carrozza puo cambiare a ultimo momento
            $table->unsignedTinyInteger('quantita_fermate');
            $table->tinyInteger('quantita_cambi')->unsigned();
            $table->boolean('in_orario');
            $table->boolean('cancellato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
