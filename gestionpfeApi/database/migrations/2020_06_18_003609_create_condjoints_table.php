<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCondjointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condjoints', function (Blueprint $table) {
            $table->id();
            $table->string("nom_conjoint",40);
            $table->string("prenom_conjoint",40);
            $table->date("date_naissance_conjoint");
            $table->string("fonction", 40);
            $table->string("employeur", 50);
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
        Schema::dropIfExists('condjoints');
    }
}
