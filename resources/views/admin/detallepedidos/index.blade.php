@extends('layouts.admin')

@php
    $correlativoaux = 1;
@endphp

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <h2>Detalles del pedido {{ $pedido[0]->created_at->format('d-m-Y') }}</h2>
            <hr class="border border-danger border-2 opacity-50">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{route("admin.detallepedidos.create")}}" class="btn btn-success mb-3">Agregar pizza</a>
            </div>    
            <table class="table table-bordered">
                <tr>
                    <th>No.</th>
                    <th>Pizza</th>
                    <th>Sub Total</th>
                    <th>Acción</th>
                </tr>
                @forelse ($detallePedido as $suc)
                <tr>
                    <td>{{$correlativoaux}}</td>
                    <td>{{$suc->pizzaPre->nombre}}</td>
                    <td class="rht">{{$suc->subtotal}}</td>
                    <td>
                    @if ($suc->pizzaPre->nombre === 'Personalizada')
                        <a href="{{ route('admin.detallepedidos.show', $suc->id) }}" class="btn btn-primary">Personalizar Ingredientes</a>
                    @endif
                    </td>
                </tr>
                @php
                   $correlativoaux++;
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
            <a href="{{ route('admin.pedidos.index') }}" class="btn btn-success mb-3">Regresar al historial</a>
        </div>
    </div>
</div>
@endsection
