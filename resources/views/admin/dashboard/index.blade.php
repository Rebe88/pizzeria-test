@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <h2>Dashboard Administrador</h2>  
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <img src="{{ asset('img/sucursales.jpg') }}" class="p-3" style="width: 100%;" alt="banner">
                        <a href="{{ route('admin.sucursales.index') }}" class="btn btn-dark">Sucursales</a>
                    </div>
                    <div class="col">
                        <img src="{{ asset('img/ingredientes.jpg') }}" class="p-3" style="width: 100%;" alt="banner">    
                        <a href="{{ route('admin.ingredientes.index') }}" class="btn btn-dark">Ingredientes</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ asset('img/nuestras-pizzas.jpg') }}" class="p-3" style="width: 100%;" alt="banner">    
                        <a href="{{ route('admin.pizzasprestablecidas.index') }}" class="btn btn-dark">Pizzas Pre-establecidas</a>
                    </div>
                    <div class="col">
                        <img src="{{ asset('img/ingrediente-pizza.jpg') }}" class="p-3" style="width: 100%;" alt="banner">    
                        <a href="{{ route('admin.combinacionPrestablecidas.index') }}" class="btn btn-dark">Combinaciones Pre-establecidas</a>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-6">
                        <img src="{{ asset('img/clientes.jpg') }}" class="p-3" style="width: 100%;" alt="banner">    
                        <a href="{{ route('admin.informacion.index') }}" class="btn btn-dark">Informacion de clientes</a>
                    </div>
                </div>
            </div>                     
        </div>
    </div>
</div>
@endsection
