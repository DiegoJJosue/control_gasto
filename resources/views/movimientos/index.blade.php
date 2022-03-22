@extends('layouts.app')
@section('content')

<h2 class="bg-dark text-white">Lista de Movimientos</h2>
<a href="{{route('movimientos.create')}}" class="btn btn-primary btn-sm">Nuevo</a>

<table class="table">
	<th>#</th>
	<th>tipo</th>	
	<th>Concepto</th>
	<th>fecha</th>
	<th>detalle</th>
	<th>cantidad</th>
	<th>Acciones</th>

</table>

@endsection