@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <h2>Informacion Relevante:</h2>  
            
            <h3>Clientes más frecuentes</h3>
            <hr class="border border-danger border-2 opacity-50">
            <table class="table table-bordered">
                <tr>
                    <th>Cliente</th>
                    <th>Frecuencia</th>
                </tr>
                @forelse ($clientesMasFrecuentes as $suc)
                <tr>
                    <td>{{ $suc->usuario->name }}</td>
                    <td>{{ $suc->Frecuencia }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="2">No hay datos disponibles.</td>
                </tr>
                @endforelse
            </table>
            <h3>Clientes que más gastan</h3>
            <hr class="border border-danger border-2 opacity-50">
            <table class="table table-bordered">
                <tr>
                    <th>Cliente</th>
                    <th>Total</th>
                </tr>
                @forelse ($clientesTotalGastado as $clienteGastado)
                    <tr>
                        <td>{{ $clienteGastado->pedido->usuario->name }}</td>
                        <td>{{ $clienteGastado->TotalGastado }}</td>
                    </tr>
                @empty
                <tr>
                    <td colspan="2">No hay datos disponibles.</td>
                </tr>
                @endforelse
            </table>
            <h3>Ingredientes más populares</h3>
            <hr class="border border-danger border-2 opacity-50">
            <table class="table table-bordered">
                <tr>
                    <th>Ingrediente</th>
                    <th>Popularidad</th>
                </tr>
                @forelse ($ingredientesPopulares as $ingr)
                    <tr>
                        <td>{{ $ingr->ingredientes->nombre }}</td>
                        <td>{{ $ingr->Popularidad }}</td>
                    </tr>
                @empty
                <tr>
                    <td colspan="2">No hay datos disponibles.</td>
                </tr>
                @endforelse
            </table>
        </div>
    </div>
</div>
@endsection
