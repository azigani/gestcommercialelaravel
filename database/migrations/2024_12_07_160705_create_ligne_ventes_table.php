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
        Schema::create('ligne_ventes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vente_id');
    $table->unsignedBigInteger('article_id');
    $table->integer('quantite');
    $table->decimal('prix_unitaire', 15, 2);
    $table->decimal('montant', 15, 2);
            $table->timestamps();
            
            $table->foreign('vente_id')->references('id')->on('ventes')->onDelete('cascade');
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ligne_ventes');
    }
};
