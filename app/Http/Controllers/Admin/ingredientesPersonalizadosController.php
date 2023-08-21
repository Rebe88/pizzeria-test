<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ingrediente;
use App\Models\detallePedido;
use App\Models\ingredientesPersonalizados;
use Session;

class ingredientesPersonalizadosController extends Controller
{
    public function index(){
        if(Session::get("detalle_id")!=null){
            //$detallePedido = detallePedido::wherePedido_id(Session::get("pedido_id"))->get(["id"]);
            $ingredientesPersonalizados = ingredientesPersonalizados::whereDetalle_id(Session::get("detalle_id"))->get();
            $detalle_id = Session::get("detalle_id");
            $detallePedido = detallePedido::findOrFail($detalle_id);            
            //$total = $detallePedido->subtotal;
            $total = number_format($detallePedido->subtotal, 2);
            return view("admin.ingredientespersonalizados.index", compact("ingredientesPersonalizados","total"));
        }
    }
    public function create(){
        $ingredientes = Ingrediente::orderBy('nombre','ASC')->get();
        $ingredientesFormatted = [];
        foreach ($ingredientes as $ingrediente) {
            $ingredientesFormatted[$ingrediente->id] = $ingrediente->nombre . ' - $' . $ingrediente->precio;
        }
        $detalle = detallePedido::orderBy('id','ASC')->pluck('id');
        return view('admin.ingredientespersonalizados.create',compact("ingredientesFormatted","detalle"));
    }
    public function store(Request $request){
        $ingredientesCustom = new ingredientesPersonalizados($request->all());
        $ingredienteSeleccionado = Ingrediente::findOrFail($request->input('ingrediente_id'));
        $precioIngrediente = $ingredienteSeleccionado->precio;
        
        $detalle_id = Session::get("detalle_id");
        $detallePedido = detallePedido::findOrFail($detalle_id);
        $detallePedido->subtotal += $precioIngrediente;
        $detallePedido->save();

        $ingredientesCustom->detalle_id = $detalle_id;
        $ingredientesCustom->ingrediente_id = $ingredienteSeleccionado->id;
        $ingredientesCustom->save();
        return redirect('admin/ingredientespersonalizados');
    }
}
