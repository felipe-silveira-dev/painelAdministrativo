<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemVenda extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'venda_id',
        'produto_id',
        'quantidade',
        'produto_preco',
    ];

    public function venda(): HasOne
    {
        return $this->hasOne(Venda::class);
    }

    public function produto(): HasOne
    {
        return $this->hasOne(Produto::class);
    }
}
