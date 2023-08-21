<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sucursales;

class SucursalController extends Controller
{
    public function index(){
        $sucursales = Sucursales::all();
        return view("admin.sucursales.index", compact("sucursales"));
    }
    public function create(){
        return view('admin.sucursales.create');
    }
    public function edit($id){
        $sucursales = Sucursales::find($id);
        return view('admin.sucursales.edit',compact("sucursales"));
    }
    public function store(Request $request){
        $sucursales = new Sucursales($request->all());
        $sucursales->save();
        return redirect('admin/sucursales');
    }
    public function update(Request $request, $id){
        $sucursales = Sucursales::findOrFail($id);
        $sucursales->fill($request->all());
        $sucursales->save();
        return redirect('admin/sucursales');
    }
    public function destroy($id){
        $sucursales = Sucursales::findOrFail($id);
        $sucursales->delete();
        return redirect('admin/sucursales');
    }
    public function publicView(){
        $sucursales = Sucursales::all();
        return view('admin.sucursales.public', compact('sucursales'));
    }
}
