@extends('layouts.app')
@section('content')




<div class="container">

<form action=" {{ url('/producto/'.$producto->id) }} " method="post" enctype="multipart/form-data">

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach( $errors->all() as $error)
        <li> {{ $error }} </li>
        @endforeach
        </ul>
    </div>

    @foreach( $errors->all() as $error)
        {{ $error }}
    @endforeach

@endif

    @csrf
    {{ method_field('PATCH') }}

    <h1>Editar Producto</h1>
    <div class="form-group">
    <label for="Nombre">Nombre:</label>
    <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}" id="">
    </div>
    <div class="form-group">
    <label for="Precio de compra">Precio de compra:</label>
    <input type="number" name="precio_compra" class="form-control" value="{{ $producto->precio_compra }}" id="">
    </div>
    <div class="form-group">
    <label for="Precio de venta">Precio de venta:</label>
    <input type="number" name="precio_venta" class="form-control" value="{{ $producto->precio_venta }}" id="">
    </div>
    <div class="form-group">
    <label for="Cantidad">Cantidad:</label>
    <input type="number" name="cantidad" class="form-control" value="{{ $producto->cantidad }}" id="">
    </div>
    <div class="form-group">
    <label for="Foto">Foto:</label> <br>
    <img src=" {{ asset('storage').'/'.$producto->foto }} " class="img-thumbnail img-fluid" width="100" alt="">
    </div>
    <input type="file" name="foto" class="form-control" value="{{ $producto->foto }}" id=""><br><br>
    <input type="submit" class="btn btn-success" value="Editar datos">
    <a href=" {{ url('/producto/') }} " class="btn btn-primary">Regresar a productos</a>
</form>
</div>
@endsection
