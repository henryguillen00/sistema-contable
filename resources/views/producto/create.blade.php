@extends('layouts.app')
@section('content')

<div class="container">


<form action="{{ url('/producto') }}" method="post" enctype="multipart/form-data">

@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
    <ul>
    @foreach( $errors->all() as $error)
    <li> {{ $error }} </li>
    @endforeach
    </ul>
</div>

@endif

    @csrf

    <h1>Crear Producto</h1>

    <div class="form-group">
    <label for="Nombre">Nombre:</label>
    <input type="text" class="form-control" name="nombre" id=""> 
    </div>
    <div class="form-group">
    <label for="Precio de compra">Precio de compra:</label>
    <input type="number" class="form-control" name="precio_compra" id=""> 
    </div>
    <div class="form-group">
    <label for="Precio de venta">Precio de venta:</label>
    <input type="number" class="form-control" name="precio_venta" id=""> 
    </div>
    <div class="form-group">
    <label for="Cantidad">Cantidad:</label>
    <input type="number" class="form-control" name="cantidad" id=""> 
    </div>
    <div class="form-group">
    <label for="Foto">Foto:</label>
    <input type="file" class="form-control" name="foto" id="">
    </div>
    <input type="submit" class="btn btn-success" value="Crear producto"> 
    <a href=" {{ url('/producto/') }} " class="btn btn-primary">Regresar a productos</a>
</form>
</div>

@endsection