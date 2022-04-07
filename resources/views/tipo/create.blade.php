@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('js/tipo.js')}}"></script>
	<h4 class="bg-dark text-white ">Formulario de Tipo</h4>
	<form action="{{route('tipo.store')}}" method="POST" onsubmit="return validar()" >
		@csrf
		<label for="">Detalle  de Tipos</label>
		<input type="text" name="tip_nombre" id="tip_nombre" >
		<button class="btn btn-success">Guardar</button>
		

	</form>

		</div>
	</div>
</div>


@endsection