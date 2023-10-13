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
        Schema::create('opérateurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('montant');
            $table->string('date');
            $table->string('type');
            $table->integer('telephone');
            $table->timestamps();
            //'nom','montant', 'date', 'type', 'telephone',
        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('opérateurs');
    }
};
