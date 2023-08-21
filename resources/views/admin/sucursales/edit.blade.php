@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 ">
        <h2>Editar sucursal</h2>
        <hr class="border border-danger border-2 opacity-50">
        {!! Form::open(['route'=>['admin.sucursales.update',$sucursales],'method'=>'PUT']) !!}
        <div class="form-group mb-3">
        {!! Form::label('slug','Slug') !!}
        {!! Form::text('slug',$sucursales->slug,['class'=>'form-control','required']) !!}
        </div>
        <div class="form-group mb-3">
        {!! Form::label('nombre','Nombre') !!}
        {!! Form::text('nombre',$sucursales->nombre,['class'=>'form-control','required']) !!}
        </div>
        <div class="form-group mb-3">
        {!! Form::label('direccion','Direccion') !!}
        {!! Form::text('direccion',$sucursales->direccion,['class'=>'form-control','required']) !!}
        </div>
        <div class="form-group">
        {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
        </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
