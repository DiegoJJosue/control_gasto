@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card">

<script src="{{asset('js/movimientos.js')}}"></script>
<form action="{{route('movimientos.store')}}" method="POST" onsubmit="return validar()">

	@csrf

	<div class="container">
		<div class="row">
			<div class="col-md-6" >	

	<label for="" class="col-md-6 col-form-label text-md-right">Seleccion</label>
	<select name="tip_id" id="tip_id" class="form-control" >
		<option value="" >Elija una opcion</option>	
		@foreach($tipos as $t)
			<option value="{{$t->tip_id}}">{{$t->tip_nombre}}</option>
		@endforeach
				</select>
			</div>

			<div class="col-md-6">
				<label for="">Fecha</label>
				<input type="date" class="form-control"  id="mov_fecha" name="mov_fecha">
				<label for="">cantidad</label>
				<input type="number" class="form-control"  id="mov_cantidad" name="mov_cantidad">
			</div>

			<div  class="col-md-5 " >
				INGRESOS<input type="radio" name="tip_id" value="1">
				EGRESOS<input type="radio" name="tip_id" value="2">
			</div>

		</div>

		<div class="col-md-12 mt-3">
						<button type="submit" class="btn btn-primary" style="margin-left: 45%" >Guardar</button>
					</div>	

	</div>

</form>
</div>
</div>
</div>
@endsection 