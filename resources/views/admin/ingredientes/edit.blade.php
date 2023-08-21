@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 ">
        <h2>Editar ingrediente</h2>
        <hr class="border border-danger border-2 opacity-50">
        {!! Form::open(['route'=>['admin.ingredientes.update',$ingredientes],'method'=>'PUT']) !!}
        <div class="form-group mb-3">
        {!! Form::label('nombre','Nombre') !!}
        {!! Form::text('nombre',$ingredientes->nombre,['class'=>'form-control','required']) !!}
        </div>
        <div class="form-group mb-3">
        {!! Form::label('precio','Precio') !!}
        {!! Form::text('precio',$ingredientes->precio,['class'=>'form-control','required']) !!}
        </div>
        <div class="form-group">
        {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
        </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
