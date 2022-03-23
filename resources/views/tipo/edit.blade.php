@extends('layouts.app')
@section('content')

<h4 class="bg-dark text-while">Editar Categoria</h4>
<h1>Editar tipos</h1>

<form action="{{route('tipos.update',$tipos->tip_id)}}" method="POST" >  
 @csrf
<label for=""> Detalle de categoria</label>
<input type="text" value="{{$tipos->tip_nombre}}" name="tip_nombre" id="tip_nombre">
<button type="submit" class="btn btn-primary">Guardar</button>

</form>
@endsection