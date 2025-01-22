<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguesEtudieesTable extends Migration
{
    public function up()
    {
        Schema::create('langues_etudiees', function (Blueprint $table) {
        
            $table->string('langue');
            $table->string('niveau');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('langues_etudiees');
    }
}
;
