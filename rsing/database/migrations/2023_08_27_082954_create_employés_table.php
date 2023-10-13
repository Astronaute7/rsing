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
        Schema::create('employés', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('telephone')->nullable();
            $table->string('statut');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
            //'nom', 'telephone', 'statut', 'email', 'password'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
