<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('object_devis');
            $table->datetime('date_validation');
            $table->boolean('statut')->default(false);
            $table->float('total_net_ht');
            $table->float('tva');
            # $table->unsignedBigInterger('user_id');
            
            //Mise en place des clés étrangères et de la synchronisation de modification et de suppression
            $table->foreignId('user_id')
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
        Schema::dropIfExists('devis');
    }
}
