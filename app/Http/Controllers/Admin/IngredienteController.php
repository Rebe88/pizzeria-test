<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ingrediente;

class IngredienteController extends Controller
{
    public function index(){
        $ingredientes = Ingrediente::all();
        return view("admin.ingredientes.index", compact("ingredientes"));
    }
    public function create(){
        return view('admin.ingredientes.create');
    }
    public function edit($id){
        $ingredientes = Ingrediente::find($id);
        return view('admin.ingredientes.edit',compact("ingredientes"));
    }
    public function store(Request $request){
        $ingredientes = new Ingrediente($request->all());
        $ingredientes->save();
        return redirect('admin/ingredientes');
    }
    public function update(Request $request, $id){
        $ingredientes = Ingrediente::findOrFail($id);
        $ingredientes->fill($request->all());
        $ingredientes->save();
        return redirect('admin/ingredientes');
    }
    public function destroy($id){
        $ingredientes = Ingrediente::findOrFail($id);
        $ingredientes->delete();
        return redirect('admin/ingredientes');
    }
    public function publicView(){
        $ingredientes = Ingrediente::all();
        return view('admin.ingredientes.public', compact('ingredientes'));
    }
}
