<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
    public function up(): void
    {
        Schema::create('contact', function (Blueprint $table) {

            $table->string('email');
            $table->integer('telephone');
            $table->string('ville');
            $table->string('codePotal');
            $table->string('pays');

            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};
