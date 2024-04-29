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
            $table->string('durata_totale', 9);
            $table->unsignedSmallInteger('codice_treno');
            $table->unsignedTinyInteger('carrozza')->nullable(); //nullable perche la carrozza puo cambiare
            $table->unsignedTinyInteger('quantita_fermate')->nullable();
            $table->tinyInteger('quantita_cambi')->default(0)->unsigned();
            $table->boolean('in_orario')->default(true); //utilizzare le parole chiave true e false nelle query del database
            $table->boolean('cancellato')->default(false); //utilizzare le parole chiave true e false nelle query del database
            $table->timestamps();

            /*
            $table->string('classi', 15);
            $table->decimal('price', 6)->unsigned();
            */

            /* INSERIRE DATI NELL DB ↓↓↓
            $train = new App\Models\Train();
                $train->stazione_partenza = "Milano Centrale"
                $train->stazione_arrivo = "Roma Termini"
                $train->azienda = "FrecciaRossa"
                $train->orario_partenza = "2024-04-25 06:15:00"
                $train->orario_arrivo = "2024-04-25 11:15:00"
                $train->durata_totale = "05h 00min"
                $train->codice_treno = 9584
                $train->carrozza = 25
                $train->quantita_fermate = 6
                $train->quantita_cambi = 1
            $train->save();

            $train->in_orario = false
            */
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
