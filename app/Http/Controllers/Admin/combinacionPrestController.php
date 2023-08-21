<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ingrediente;
use App\Models\pizzasPrestablecidas;
use App\Models\combinacionPrest;

class combinacionPrestController extends Controller
{
    public function index(){
        $combinacionPrest = combinacionPrest::all();
        return view("admin.combinacionPrestablecidas.index", compact("combinacionPrest"));
    }
    public function create(){
        $ingredientes = Ingrediente::orderBy('nombre','ASC')->pluck('nombre','id');
        $pizzasPrestablecidas = PizzasPrestablecidas::orderBy('nombre','ASC')->pluck('nombre','id');
        return view('admin.combinacionPrestablecidas.create',compact("ingredientes","pizzasPrestablecidas"));
    }
    public function edit($id){
        $combinacionPrest = combinacionPrest::find($id);
        $ingredientes = Ingrediente::orderBy('nombre','ASC')->pluck('nombre','id');
        $pizzasPrestablecidas = PizzasPrestablecidas::orderBy('nombre','ASC')->pluck('nombre','id');
        return view('admin.combinacionPrestablecidas.edit',compact("combinacionPrest","ingredientes","pizzasPrestablecidas"));
    }
    public function store(Request $request){
        $combinacionPrest = new combinacionPrest($request->all());
        $combinacionPrest->save();
        return redirect('admin/combinacionPrestablecidas');
    }
    public function update(Request $request, $id){
        $combinacionPrest = combinacionPrest::findOrFail($id);
        $combinacionPrest->fill($request->all());
        $combinacionPrest->save();
        return redirect('admin/combinacionPrestablecidas');
    }
    public function destroy($id){
        $combinacionPrest = combinacionPrest::findOrFail($id);
        $combinacionPrest->delete();
        return redirect('admin/combinacionPrestablecidas');
    }
    public function publicView(){
        //$combinacionPrest = combinacionPrest::all();
        $combinacionPrest = combinacionPrest::with('pizzaPre', 'ingredientes')
        ->get()
        ->groupBy('pizzaPre_id');
        return view('admin.combinacionPrestablecidas.public', compact('combinacionPrest'));
    }
}
