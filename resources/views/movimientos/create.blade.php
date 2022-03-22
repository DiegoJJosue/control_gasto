@extends('layouts.app')
@section('content')

<form action="{{route('movimientos.create')}}" method="POST">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-md-4" >	
	<label for="" >Concepto</label>
	<select name="" id="" class="form-control" >
		<option value="" >Elija una opcion</option>	
		@foreach($tipos as $t)
			<option value="{{$t->tip_id}}">{{$t->tip_nombre}}</option>
		@endforeach
				</select>
			</div>
		</div>	
	</div>

</form>

@endsection