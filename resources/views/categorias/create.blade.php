@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('js/categorias.js')}}"></script>
	<h4 class="bg-dark text-white ">Formulario de categoria</h4>
	<form action="{{route('categorias.store')}}" method="POST" onsubmit="return validar()" >
		@csrf
		<label for="">Detalle  de categoria</label>
		<input type="text" name="cat_nombre" id="cat_nombre" >
		<button type="submit" class="btn btn-success">Guardar</button>
		

	</form>

		</div>
	</div>
</div>


@endsection