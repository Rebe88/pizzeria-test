<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Pedido extends Model
{
    use HasFactory;
    //const CREATED_AT = 'creation_date';
    protected $fillable = [
        'user_id',
    ];
    public function usuario(){
        return $this->belongsTo(User::class,'user_id', 'id');
    }
    public function detallePedido(){
        return $this->hasMany(detallePedido::class);
    }
}
