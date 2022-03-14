@extends('layouts.app')

@section('content')
	<h4 class="bg-dark text-white ">Formulario de registro</h4>
	<form action="{{route('categorias.store')}}" method="POST" >
		@csrf
		<label for="">Detalle  de categoria</label>
		<input type="text" name="cat_nombre" id="cat_nombre" >
		<button class="btn btn-success">Guardar</button>
		

	</form>



@endsection