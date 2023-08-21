<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'precio',
    ];
    public function combinacionPrest(){
        return $this->hasMany(combinacionPrest::class);
    }
    public function ingredientesPers(){
        return $this->hasMany(ingredientesPersonalizados::class);
    }
}
