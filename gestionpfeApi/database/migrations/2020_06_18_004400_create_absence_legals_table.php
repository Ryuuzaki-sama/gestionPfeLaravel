<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsenceLegalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absence_legals', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->unsignedBigInteger('absence_reason_id');
            $table->date('periode_start');
            $table->date('periode_end');
            $table->integer('total_days');
            $table->string('observation',200);
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
        Schema::dropIfExists('absence_legals');
    }
}
