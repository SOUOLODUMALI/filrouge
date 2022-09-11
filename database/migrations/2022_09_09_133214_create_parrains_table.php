<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parrains' , function (Blueprint $table) {
           
            $table->string('nom');
            $table->string('prenom');
            $table->string('date_naissance');
            $table->string('email');
            $table->string('password');
            $table->foreignId('fieul_id')->constrained();

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
        Schema::dropIfExists('parrains');
    }
}
