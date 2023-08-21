@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 ">
        {!! Form::open(['route'=>['admin.combinacionPrestablecidas.update',$combinacionPrest],'method'=>'PUT']) !!}
        <div class="form-group mb-3">
        {!! Form::label('nombre','Nombre Pizza') !!}
        {!! Form::select('pizzaPre_id',$pizzasPrestablecidas,$combinacionPrest->pizzaPre_id,['class'=>'form-control','required']) !!}
        </div>
        <div class="form-group mb-3">
        {!! Form::label('nombre','Ingrediente') !!}
        {!! Form::select('ingrediente_id',$ingredientes,$combinacionPrest->ingrediente_id,['class'=>'form-control','required']) !!}
        </div>
        <div class="form-group">
        {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
        </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
