@extends('layouts.app')
@section('content')

<h4 class="bg-dark text-while">Editar tipos</h4>
<h1>Editar tipos</h1>

<form action="{{route('tipos.update',$tipo->tip_id)}}" method="POST" >  
 @csrf
<label for=""> Detalle de categoria</label>
<input type="text" value="{{$tipo->tip_nombre}}" name="tip_nombre" id="tip_nombre">
<button type="submit" class="btn btn-primary">Guardar</button>

</form>
@endsection