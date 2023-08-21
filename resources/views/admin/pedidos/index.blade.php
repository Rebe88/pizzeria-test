@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <h2>Mi historial de pedidos</h2>
            <hr class="border border-danger border-2 opacity-50">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{route("admin.pedidos.create")}}" class="btn btn-success mb-3">CREAR</a >
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>No. Pedido</th>
                    <th>Fecha del pedido</th>
                </tr>
                @forelse ($pedidos as $suc)
                <tr>
                    <td>{{$correlativo}}</td>
                    <td>{{$suc->created_at->format('d-m-Y')}}</td>
                    <td>
                        <a href="{{ route('admin.pedidos.show', $suc->id ) }}" class="btn btn-success">Detalles del pedido</a>                    
                    </td>
                </tr>
                @php
                    $correlativo++;
                @endphp
                @empty
                @endforelse
            </table>
        </div>
    </div>
</div>
@endsection
