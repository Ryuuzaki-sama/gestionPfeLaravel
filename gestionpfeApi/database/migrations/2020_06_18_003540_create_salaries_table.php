<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
          $table->id();
          $table->string('title',5);
          $table->string("nom_salarie",40);
          $table->string("prenom_salarie", 40);
          $table->string("gender", 10);
          $table->string("nationalite", 20);
          $table->date("date_naissance");
          $table->string("adresse", 150);
          $table->string("email")->unique();
          $table->string("telephone",30);
          $table->date("date_entree");
          $table->string("observations",200);
          $table->string("cin_salarie", 40);
          $table->date("cin_date_created_at");
          $table->string("cin_localisation_created_at", 40);

          $table->unsignedBigInteger('pays_id')->nullable();
          $table->unsignedBigInteger('ville_id')->nullable();

          $table->unsignedBigInteger("permis_id")->nullable();
          $table->unsignedBigInteger("situation_familial_id")->nullable();

          $table->unsignedBigInteger("fonction_id")->nullable();
          //$table->unsignedBigInteger("sevice_id")->nullable();
          $table->unsignedBigInteger("sanction_id")->nullable();
          $table->unsignedBigInteger("accident_id")->nullable();

          $table->unsignedBigInteger("promotion_id")->nullable();
          $table->unsignedBigInteger("absence_legal_id")->nullable();
          $table->unsignedBigInteger("suivi_professionel_id")->nullable();

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
        Schema::dropIfExists('salaries');
    }
}
