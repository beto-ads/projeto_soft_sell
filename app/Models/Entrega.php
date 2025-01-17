<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    use HasFactory;
    protected $table = 'entrega';
    protected $guarded = [];

    protected $fillable = [
        'cliente_id',
        'pedido_id',
        'entregador_id',
        'enderecoEntrega',
        'status',
    ];
}
