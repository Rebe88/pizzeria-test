<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pedido;
use Illuminate\Support\Facades\Auth;
use Session;

class PedidoController extends Controller
{
    public function index(){
        $user = Auth::user();
        if ($user) { 
            //$pedidos = Pedido::whereUser_id(Session::get($user->id))->get();
            $pedidos = Pedido::where('user_id', $user->id)->get();
            $correlativo = 1; 

            return view("admin.pedidos.index", compact("pedidos","correlativo"));
        }
    }
    public function create(){
        return view('admin.pedidos.create'); 
    }
    public function edit($id){
        /*$combinacionPrest = combinacionPrest::find($id);
        $ingredientes = Ingrediente::orderBy('nombre','ASC')->pluck('nombre','id');
        $pizzasPrestablecidas = PizzasPrestablecidas::orderBy('nombre','ASC')->pluck('nombre','id');
        return view('admin.combinacionPrestablecidas.edit',compact("combinacionPrest","ingredientes","pizzasPrestablecidas"));*/
    }
    public function store(Request $request){
        if (Auth::check()) {
            $user = Auth::user();
            if ($user) { 
                $pedido = new Pedido([
                    'user_id' => $user->id,
                ]);

                $pedido->save();

                return redirect('admin/pedidos'); 
            }
        }
    
        return redirect('admin/pedidos');
    }
    public function update(Request $request, $id){
        /* $combinacionPrest = combinacionPrest::findOrFail($id);
        $combinacionPrest->fill($request->all());
        $combinacionPrest->save();
        return redirect('admin/combinacionPrestablecidas'); */
    }
    public function destroy($id){
        /*$combinacionPrest = combinacionPrest::findOrFail($id);
        $combinacionPrest->delete();
        return redirect('admin/combinacionPrestablecidas');*/
    }
    public function show($id){
        //$correlativo = session('correlativo');
        $correlativo = session('correlativo');
        Session::put("pedido_id",$id);
        return redirect('admin/detallepedidos');
    }
}
