<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pizzasPrestablecidas;

class pizzasPrestablecidasController extends Controller
{
    public function index(){
        $pizzasPrestablecidas = PizzasPrestablecidas::all();
        return view("admin.pizzasPrestablecidas.index", compact("pizzasPrestablecidas"));
    }
    public function create(){
        return view('admin.pizzasPrestablecidas.create');
    }
    public function edit($id){
        $pizzasPrestablecidas = PizzasPrestablecidas::find($id);
        return view('admin.pizzasPrestablecidas.edit',compact("pizzasPrestablecidas"));
    }
    public function store(Request $request){
        $pizzasPrestablecidas = new PizzasPrestablecidas($request->all());
        $pizzasPrestablecidas->save();
        return redirect('admin/pizzasprestablecidas');
    }
    public function update(Request $request, $id){
        $pizzasPrestablecidas = PizzasPrestablecidas::findOrFail($id);
        $pizzasPrestablecidas->fill($request->all());
        $pizzasPrestablecidas->save();
        return redirect('admin/pizzasprestablecidas');
    }
    public function destroy($id){
        $pizzasPrestablecidas = PizzasPrestablecidas::findOrFail($id);
        $pizzasPrestablecidas->delete();
        return redirect('admin/pizzasprestablecidas');
    }
}
