<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public function orcamento()
    {
        return $this->belongsTo(Orcamento::class);
    }

    public function itens()
    {
        return $this->hasMany(Item::class);
    }

}
