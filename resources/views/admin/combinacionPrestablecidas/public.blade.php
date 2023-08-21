@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <h2>Combinacion de pizzas preestablecidas</h2>
            <hr class="border border-danger border-2 opacity-50">
            <table class="table table-bordered">
                <tr>
                    <th>Nombre Pizza</th>
                    <th>Ingredientes</th>
                </tr>
                @forelse ($combinacionPrest as $pizzaPreId => $combinaciones)
                    <tr>
                        <td>{{ $combinaciones->first()->pizzaPre->nombre }}</td>
                        <td>
                            @foreach ($combinaciones as $combinacion)
                                {{ $combinacion->ingredientes->nombre }}@if (!$loop->last),@endif
                            @endforeach
                        </td>
                    </tr>
                @empty
                @endforelse

            </table>
        </div>
    </div>
</div>
@endsection
