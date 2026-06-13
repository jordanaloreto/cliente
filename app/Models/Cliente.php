<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'foto',
    ];

    protected $appends = [
        'foto_url'
    ];

    public function getFotoUrlAttribute(): ?string
    {
        return $this->foto
            ? asset('storage/' . $this->foto)
            : null;
    }
}
