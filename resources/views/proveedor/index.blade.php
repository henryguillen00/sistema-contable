@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}
@endif

<a href="{{ url('proveedor/create') }}" class="btn btn-success">Registrar un nuevo proveedor </a>
<br><br>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Fiabilidad</th>
        </tr>
    </thead>
    <tbody>
        @foreach($proveedors as $proveedor)
        <tr>
            <td>{{ $proveedor->id }}</td>      
            <td>{{ $proveedor->nombre }}</td>
            <td>{{ $proveedor->tipo }}</td>
            <td>{{ $proveedor->fiabilidad }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection