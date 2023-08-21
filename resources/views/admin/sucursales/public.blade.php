@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <h2>Sucursales existentes</h2>
            <hr class="border border-danger border-2 opacity-50">
            <table class="table table-bordered">
                <tr>
                    <th>Nombre</th>
                    <th>Direccion</th>
                </tr>
                @forelse ($sucursales as $suc)
                <tr>
                    <td>{{$suc->nombre}}</td>
                    <td>{{$suc->direccion}}</td>
                </tr>
                @empty
                <tr>
                    <td>-</td>
                    <td>-</td>
                </tr>
                @endforelse
            </table>
        </div>
    </div>
</div>
@endsection
