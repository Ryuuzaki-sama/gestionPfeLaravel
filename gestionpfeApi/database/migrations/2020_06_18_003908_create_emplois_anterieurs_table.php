<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploisAnterieursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emplois_anterieurs', function (Blueprint $table) {
            $table->id();
            $table->string("employeur",40);
            $table->date("date_entree");
            $table->date("date_sortie");
            $table->string("last_fonct", 50);
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
        Schema::dropIfExists('salarie_entres');
    }
}
