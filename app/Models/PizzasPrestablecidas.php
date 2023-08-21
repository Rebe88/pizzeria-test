<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PizzasPrestablecidas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'preciobase',
    ];
    public function combinacionPrest(){
        return $this->hasMany(combinacionPrest::class);
    }
    public function detallePedido(){
        return $this->hasMany(detallePedido::class);
    }
}
