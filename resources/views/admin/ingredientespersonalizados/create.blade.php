@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
        <h2>Agregar Ingredientes Personalizados</h2>
        <hr class="border border-danger border-2 opacity-50">
        {!! Form::open(['route'=>'admin.ingredientespersonalizados.store','method'=>'POST','files'=>true]) !!}
        <div class="form-group mb-3">
        {!! Form::label('detalle','Detalle ID') !!}
        {!! Form::select('detalle_id',$detalle,null,['class'=>'form-control','required','disabled' => 'disabled']) !!}
        </div>
        <div class="form-group mb-3">
        {!! Form::label('ingrediente','Ingrediente') !!}
        {!! Form::select('ingrediente_id',$ingredientesFormatted,null,['class'=>'form-control','required']) !!}
        </div>
        <div class="form-group">
        {!! Form::submit('Registrar',['class'=>'btn btn-success']) !!}
        </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
