@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}
@endif

<a href="{{ url('producto/create') }}" class="btn btn-success">Registrar un nuevo producto </a>
<br><br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Precio de compra</th>
            <th>Precio de venta</th>
            <th>Cantidad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $productos as $producto)
        <tr>
            <td>{{ $producto->id }}</td>
            
            <td>
                <img src=" {{ asset('storage').'/'.$producto->foto }} " width="100" class="img-thumbnail img-fluid" alt="">
            </td>
            
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->precio_compra }}</td>
            <td>{{ $producto->precio_venta }}</td>
            <td>{{ $producto->cantidad }}</td>
            <td><a href="{{ url('/producto/'.$producto->id.'/edit') }}" class="btn btn-primary">
                Editar</a> | 
                
                 <form action="{{ url('/producto/'.$producto->id) }}" class="d-inline" method="post">
                @csrf
                {{ method_field('DELETE') }}                
                <input type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres eliminar?')" value="Eliminar">

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection