<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    protected $fillable = [
        'nome',
        'slug',
        'descricao',
        'is_active',
        'user_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
