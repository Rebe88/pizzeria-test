@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <h2>Ingredientes existentes</h2>
            <hr class="border border-danger border-2 opacity-50">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{route("admin.ingredientes.create")}}" class="btn btn-success mb-3">CREAR</a>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Acción</th>
                </tr>
                @forelse ($ingredientes as $suc)
                <tr>
                    <td>{{$suc->id}}</td>
                    <td>{{$suc->nombre}}</td>
                    <td>{{$suc->precio}}</td>
                    <td>
                        <a href="{{route("admin.ingredientes.edit",$suc->id)}}" class="btn btn-success">Edit</a>
                    </td>
                </tr>
                @empty
                @endforelse
            </table>
            <a href="{{ route('admin.dashboard.index') }}" class="btn btn-success mb-3">Dashboard</a>
        </div>
    </div>
</div>
@endsection
