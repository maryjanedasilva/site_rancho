<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
     use HasFactory;

    protected $fillable = [
        'nome',
        'email',
    ];

    // Relacionamento: um cliente pode ter várias avaliações
    public function avaliacoes()
    {
        return $this->hasMany(Avaliacao::class);
    }
}
