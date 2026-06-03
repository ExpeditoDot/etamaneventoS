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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('local');
            $table->date('data');
            $table->decimal("preco_ingresso", 8, 2);
            $table->string('descricao');
            $table->string('imagem')->nullable;
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
