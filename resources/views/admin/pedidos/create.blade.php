@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
        <h2>Pedido Nuevo</h2>
        <hr class="border border-danger border-2 opacity-50">
        <p>Desea crear un nuevo pedido?</p>
        {!! Form::open(['route'=>'admin.pedidos.store','method'=>'POST','files'=>true]) !!}
        <div class="form-group">
        {!! Form::submit('Crear',['class'=>'btn btn-success']) !!}
        </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
