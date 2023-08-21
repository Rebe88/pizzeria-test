@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
        <h2>Pizzas Preestablecidas nueva opción</h2>
        <hr class="border border-danger border-2 opacity-50">
        {!! Form::open(['route'=>'admin.pizzasprestablecidas.store','method'=>'POST','files'=>true]) !!}
        <div class="form-group mb-3">
        {!! Form::label('nombre','Nombre') !!}
        {!! Form::text('nombre',null,['class'=>'form-control','required']) !!}
        </div>
        <div class="form-group mb-3">
        {!! Form::label('preciobase','Precio Base') !!}
        {!! Form::text('preciobase',null,['class'=>'form-control','required']) !!}
        </div>
        <div class="form-group">
        {!! Form::submit('Registrar',['class'=>'btn btn-success']) !!}
        </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
