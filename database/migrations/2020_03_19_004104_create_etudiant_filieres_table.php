<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantFilieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiant_filieres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('etudient_id')->unsigned();
            $table->foreign('etudient_id')->references('id')->on('etudients');
            $table->integer('filiere_id')->unsigned();
            $table->foreign('filiere_id')->references('id')->on('filiers');
            $table->date('date_inscription'); 
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
        Schema::dropIfExists('etudiant_filieres');
    }
}
