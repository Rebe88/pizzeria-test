<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pizzasPrestablecidas;
use App\Models\Pedido;
use App\Models\detallePedido;
use Session;

class detallePedidoController extends Controller
{
    public function index(){
        if(Session::get("pedido_id")!=null){
            //$detallePedido = detallePedido::wherePedido_id(Session::get("pedido_id"))->get(["id"]);
            $detallePedido = detallePedido::wherePedido_id(Session::get("pedido_id"))->get();
            $pedido = Pedido::where('id',Session::get("pedido_id"))->get(["created_at"]);
            //en view: format('d-m-Y H:i:s')
            //$pedidos = Pedido::where('user_id', $user->id)->get();
            //$total = $detallePedido->sum('subtotal');
            $total = number_format($detallePedido->sum('subtotal'), 2);
            $correlativo = Session::get("correlativo");
            return view("admin.detallePedidos.index", compact("detallePedido","total","correlativo","pedido"));
        }
    }
    public function create(){
        $pedidos = Pedido::orderBy('id','ASC')->pluck('id');
        $pizzasPrestablecidas = PizzasPrestablecidas::orderBy('nombre','ASC')->get();
        $pizzasPrestablecidasFormatted = [];
        foreach ($pizzasPrestablecidas as $pizza) {
            $pizzasPrestablecidasFormatted[$pizza->id] = $pizza->nombre . ' - $' . $pizza->preciobase;
        }
        return view('admin.detallepedidos.create',compact("pedidos","pizzasPrestablecidasFormatted"));
    }
    public function edit($id){
        /*$detallePedido = combinacionPrest::find($id);
        $ingredientes = Ingrediente::orderBy('nombre','ASC')->pluck('nombre','id');
        $pizzasPrestablecidas = PizzasPrestablecidas::orderBy('nombre','ASC')->pluck('nombre','id');
        return view('admin.combinacionPrestablecidas.edit',compact("combinacionPrest","ingredientes","pizzasPrestablecidas"));*/
    }
    public function store(Request $request){
        $detallePedido = new detallePedido($request->all());
        $pedido_id = Session::get("pedido_id");
        $detallePedido->pedido_id=$pedido_id;
        $pizzaSeleccionada = pizzasPrestablecidas::findOrFail($request->input('pizzaPre_id'));
        $detallePedido->subtotal = $pizzaSeleccionada->preciobase;
        $detallePedido->save();
        return redirect('admin/detallepedidos');
    }
    public function update(Request $request, $id){
        /*$combinacionPrest = combinacionPrest::findOrFail($id);
        $combinacionPrest->fill($request->all());
        $combinacionPrest->save();
        return redirect('admin/detallepedidos');*/
    }
    public function destroy($id){
        $detallePedido = detallePedido::findOrFail($id);
        $detallePedido->delete();
        return redirect('admin/detallepedidos');
    }
    public function show($id){
        Session::put("detalle_id",$id);
        return redirect('admin/ingredientespersonalizados');
    }
}
