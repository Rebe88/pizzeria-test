@extends('layouts.admin')

@php
    $correlativo = 1;
@endphp

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <h2>Los ingredientes de tu pizza personalizada $5</h2>
            <hr class="border border-danger border-2 opacity-50">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{route("admin.ingredientespersonalizados.create")}}" class="btn btn-success mb-3">Agregar Ingrediente</a>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>No.</th>
                    <th>Ingredientes</th>
                    <th>Extra</th>
                </tr>
                @forelse ($ingredientesPersonalizados as $suc)
                <tr>
                    <td>{{$correlativo}}</td>
                    <td>{{$suc->ingredientes->nombre}}</td>
                    <td class="rht">{{$suc->ingredientes->precio}}</td>
                </tr>
                @php
                   $correlativo++;
                @endphp
                @empty
                @endforelse
                @if(isset($total))
                <tr>
                    <td colspan="2" style="text-align: right;"><strong>Total:</strong></td>
                    <td class="rht">${{$total}}</td>
                </tr>
                @endif
            </table>
            <a href="{{ route('admin.detallepedidos.index') }}" class="btn btn-success mb-3">Regresar al pedido</a>
        </div>
    </div>
</div>
@endsection
