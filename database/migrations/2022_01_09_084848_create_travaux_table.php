<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travaux', function (Blueprint $table) {
            $table->id();
            $table->string('type_travaux'); # => plomberie / peinture
            $table->string('types_ouvrages');
            $table->string('materiel_primaire');
            $table->string('materiel_secondaire')->nullable();
            $table->string('quantite_primaire');
            $table->string('quantite_secondaire')->nullable();
            $table->string('nombre_mcarre');
            $table->string('duree_estimee')->nullable();
            $table->string('price_materiel_primaire')->nullable();
            # $table->string('');

            # configuration de la key etrangere et synchro avec le devis
            $table->foreignId('devis_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');

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
        Schema::dropIfExists('travaux');
    }
}
