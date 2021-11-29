@extends('layouts.app')
@section('content')

<div class="container">


<form action="{{ url('/proveedor') }}" method="post" enctype="multipart/form-data">

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

    <h1>Ingresar un nuevo proveedor</h1>

    <div class="form-group">
    <label for="Nombre">Nombre:</label>
    <input type="text" class="form-control" name="nombre" id=""> 
    </div>
    <div class="form-group">
    <label for="Nombre">Tipo:</label>
    <input type="text" class="form-control" name="tipo" id=""> 
    </div>
    <div class="form-group">
    <label for="Nombre">Fiabilidad:</label>
    <input type="text" class="form-control" name="fiabilidad" id=""> 
    </div>

    <input type="submit" class="btn btn-success" value="Agregar proveedor"> 
    <a href=" {{ url('/producto/') }} " class="btn btn-primary">Regresar a productos</a>
</form>
</div>

@endsection 