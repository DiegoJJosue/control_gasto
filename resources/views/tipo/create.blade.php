@extends('layouts.app')

@section('content')
	<h4 class="bg-dark text-white ">Formulario de Tipo</h4>
	<form action="{{route('tipo.store')}}" method="POST" >
		@csrf
		<label for="">Detalle  de Tipos</label>
		<input type="text" name="tip_nombre" id="tip_nombre" >
		<button class="btn btn-success">Guardar</button>
		

	</form>



@endsection