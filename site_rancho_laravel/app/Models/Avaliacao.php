<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'nota',
        'comentario',
    ];

    // Relacionamento: uma avaliação pertence a um cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
