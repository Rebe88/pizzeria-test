<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detallePedido extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'pedido_id',
        'pizzaPre_id',
        'subtotal',
    ];
    public function pizzaPre(){
        return $this->belongsTo(PizzasPrestablecidas::class,'pizzaPre_id', 'id');
    }
    public function pedido(){
        return $this->belongsTo(Pedido::class,'pedido_id', 'id');
    }
    public function ingredientesPers(){
        return $this->hasMany(ingredientesPersonalizados::class);
    }
}
