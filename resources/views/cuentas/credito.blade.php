@extends('layouts.app')
@section('content')

<div class="container">


<form action="{{ url('/credito') }}" method="post" enctype="multipart/form-data">

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

    <h1>Ingresar credito</h1>

    <div class="form-group">
    <label for="Nombre">fecha realizacion :</label>
    <input type="text" class="form-control" name="fecha_realizacion" id=""> 
    </div>
    <div class="form-group">
    <label for="Nombre">Proveedor: </label>
    <input type="text" class="form-control" name="proveedor_id" id=""> 
    </div>
    <div class="form-group">
    <label for="Nombre">Valor: </label>
    <input type="text" class="form-control" name="valor" id=""> 
    </div>
    <div class="form-group">
    <label for="Nombre">Fecha de pago: </label>
    <input type="text" class="form-control" name="fecha_pago" id=""> 
    </div>

    <div class="form-group">
    <label for="Nombre">Comentario: </label>
    <input type="text" class="form-control" name="comentario" id=""> 
    </div>

    <input type="submit" class="btn btn-success" value="Ingresar "> 
    <a href=" {{ url('/producto/') }} " class="btn btn-primary">Regresar a productos</a>
</form>
</div>

@endsection 