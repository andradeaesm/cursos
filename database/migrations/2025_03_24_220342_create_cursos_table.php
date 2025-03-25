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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoria_id')->constrained();
            $table->string('nome');
            $table->string('descricao');
            $table->string('imagem')->nullable();
            $table->decimal('valor', 10, 2);
            $table->string('professor');
            $table->string('duracao');
            $table->integer('vagas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
