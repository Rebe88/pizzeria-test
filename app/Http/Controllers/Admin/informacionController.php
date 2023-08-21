<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Ingrediente;
use App\Models\Pedido;
use App\Models\detallePedido;
use App\Models\ingredientesPersonalizados;

class informacionController extends Controller
{
    public function index(){
        $clientesMasFrecuentes = Pedido::selectRaw('user_id, COUNT(*) AS Frecuencia')
            ->groupBy('user_id')
            ->orderByDesc('Frecuencia')
            ->get();
        
        $clientesTotalGastado = detallePedido::select('pedido_id', DB::raw('SUM(subtotal) as TotalGastado'))
            ->groupBy('pedido_id')
            ->orderByDesc('TotalGastado')
            ->get();

        $ingredientesPopulares = ingredientesPersonalizados::select('ingrediente_id', DB::raw('COUNT(*) as Popularidad'))
            ->groupBy('ingrediente_id')
            ->orderByDesc('Popularidad')
            ->get();
        
        return view('admin.informacion.index',['clientesMasFrecuentes' => $clientesMasFrecuentes,'clientesTotalGastado' => $clientesTotalGastado, 'ingredientesPopulares' => $ingredientesPopulares ]);
    }
}
