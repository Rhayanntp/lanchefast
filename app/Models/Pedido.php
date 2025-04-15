<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'cliente_id', 
        'data_hora', 
        'valor_total', 
        'valor_com_desconto', 
        'forma_pagamento', 
        'status'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
