<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsAcademiquesTable extends Migration
{
    public function up()
    {
        Schema::create('projets_academiques', function (Blueprint $table) {
        
            $table->string('titre');
            $table->text('description');
            // Ajoutez d'autres colonnes selon vos besoins
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projets_academiques');
    }
};
