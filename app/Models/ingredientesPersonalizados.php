<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingredientesPersonalizados extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'detalle_id',
        'ingrediente_id',
    ];
    public function detalles(){
        return $this->belongsTo(detallePedido::class,'detalle_id', 'id');
    }
    public function ingredientes(){
        return $this->belongsTo(Ingrediente::class,'ingrediente_id', 'id');
    } 
}
