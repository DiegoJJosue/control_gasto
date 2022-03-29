@extends('layouts.app')
@section('content')

<h4 class="bg-dark text-while">Editar Movimientos</h4>
<h1>Editar Movimientos</h1>

<form action="{{route('movimientos.update',$movimientos->mov_id)}}" method="POST" >
<form action="{{route('movimientos.destroy',$movimientos->mov_id)}}" method="POST" >   
 @csrf
<label for=""> Detalle de las Fechas</label>
<input type="text" value="{{$movimientos->mov_fecha}}" name="mov_fecha" id="mov_fecha">
<label for=""> Detalle de las Cantidad</label>
<input type="text" value="{{$movimientos->mov_cantidad}}" name="mov_cantidad" id="mov_cantidad">
<button type="submit" class="btn btn-primary">Guardar</button>

</form>
@endsection