@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 ">
        <h2>Pizzas Preestablecidas edicion de opción</h2>
        <hr class="border border-danger border-2 opacity-50">
        {!! Form::open(['route'=>['admin.pizzasprestablecidas.update',$pizzasPrestablecidas],'method'=>'PUT']) !!}
        <div class="form-group mb-3">
        {!! Form::label('nombre','Nombre') !!}
        {!! Form::text('nombre',$pizzasPrestablecidas->nombre,['class'=>'form-control','required']) !!}
        </div>
        <div class="form-group mb-3">
        {!! Form::label('prepreciobasecio','Precio Base') !!}
        {!! Form::text('preciobase',$pizzasPrestablecidas->preciobase,['class'=>'form-control','required']) !!}
        </div>
        <div class="form-group">
        {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
        </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
