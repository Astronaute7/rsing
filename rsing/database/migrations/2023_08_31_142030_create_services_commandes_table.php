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
        Schema::create('services_commandes', function (Blueprint $table) {
            $table->bigInteger("id_service");
            $table->bigInteger("id_commande");
            $table->timestamps();
            $table->foreign("id_service")->references('id')->on('services');
            $table->foreign("id_commande")->references('id')->on('commandes');
            $table->primary("id_service", "id_commande");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_commandes');
    }
};
