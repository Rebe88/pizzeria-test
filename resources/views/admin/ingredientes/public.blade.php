@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <h2>Ingredientes existentes</h2>
            <hr class="border border-danger border-2 opacity-50">
            <table class="table table-bordered">
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                </tr>
                @forelse ($ingredientes as $suc)
                <tr>
                    <td>{{$suc->nombre}}</td>
                    <td>{{$suc->precio}}</td>
                </tr>
                @empty
                @endforelse
            </table>
        </div>
    </div>
</div>
@endsection
