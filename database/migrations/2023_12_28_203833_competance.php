<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Competance extends Migration
{
    public function up()
    {
        Schema::create('competences', function (Blueprint $table) {
        
            $table->string('nom');
            $table->text('description');
            // Ajoutez d'autres colonnes selon vos besoins
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('competences');
    }
}
