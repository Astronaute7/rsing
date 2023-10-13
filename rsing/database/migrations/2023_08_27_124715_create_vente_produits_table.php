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
        Schema::create('vente_produits', function (Blueprint $table) {
            $table->bigInteger("id_produit");
            $table->bigInteger("id_vente");
            $table->timestamps();
            $table->foreign("id_produit")->references('id')->on('produits');
            $table->foreign("id_vente")->references('id')->on('ventes');
            $table->primary("id_vente", "id_produit");
            // 'id_produit', 'id_vente'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vente_produits');
    }
};
