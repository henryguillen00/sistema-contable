@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}
@endif

<tbody>
<?php $sum= 0; ?>
        
        @foreach( $creditos as $credito )
        <?php $sum+= $credito->valor; ?>
        @endforeach
    
    </tbody>

<h1>Deuda: <td>{{$sum}}</td> </h1>


<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>proveedor</th>
            <th>valor</th>
            <th>Fecha limite de pago</th>
        
        </tr>
    </thead>
    <tbody>
        @foreach( $creditos as $credito )
        <tr>
            <td>{{ $credito->id}}</td>      
            <td>{{ $credito->proveedor_id}}</td>
            <td>{{ $credito->valor}}</td>
            <td>{{ $credito->fecha_pago}}</td>
        </tr>
        @endforeach

    </tbody>
</table>
</div>
@endsection