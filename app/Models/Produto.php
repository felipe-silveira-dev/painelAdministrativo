<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nome',
        'slug',
        'descricao',
        'preco',
        'quantidade',
        'categoria_id',
        'marca_id',
        'user_id',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
}
