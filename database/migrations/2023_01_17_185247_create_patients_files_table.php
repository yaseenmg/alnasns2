<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientsFiles', function (Blueprint $table) {
            $table->id();
            $table->longText('photo');
            $table->string('name');
            $table->string('age');
            $table->string('phone');
            $table->string('date');
            $table->string('consultationDate');
            $table->longText('notes');
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
        Schema::dropIfExists('patientsFiles');
    }
}


