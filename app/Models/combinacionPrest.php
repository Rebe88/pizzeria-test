<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class combinacionPrest extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'pizzaPre_id',
        'ingrediente_id',
    ];
    public function pizzaPre(){
        return $this->belongsTo(PizzasPrestablecidas::class,'pizzaPre_id', 'id');
    }
    public function ingredientes(){
        return $this->belongsTo(Ingrediente::class,'ingrediente_id', 'id');
    }  
}
