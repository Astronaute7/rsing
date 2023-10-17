<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('statut');
            $table->string('nomClient');
            $table->string('telephoneClient');
            $table->text('description');
            $table->bigInteger('id_service');
            $table->foreign("id_service")->references('id')->on('services')->constrained()->cascadeOnDelete();
            $table->timestamps();
            //'date', 'statut','description', 'id_client',
        });
    }

    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }     
};
