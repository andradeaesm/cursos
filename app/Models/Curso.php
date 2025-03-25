<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Curso extends Model
{
    /** @use HasFactory<\Database\Factories\CursoFactory> */
    use HasFactory;

    protected $fillable = ['categoria_id', 'nome', 'descricao', 'imagem', 'valor', 'professor', 'duracao', 'vagas'];

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }
}
