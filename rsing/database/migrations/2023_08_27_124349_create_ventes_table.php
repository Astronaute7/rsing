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
        Schema::create('ventes', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('nom');
            $table->integer('quantité');
            $table->integer('prixTotal');
            $table->integer('gainDuJour');
            $table->bigInteger('id_employé');
            $table->foreign("id_employé")->references('id')->on('employés')->constrained()->cascadeOnDelete();
            $table->timestamps();
            //'nom', 'date', 'quantité','prixTotal','id_employé'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventes');
    }
};
