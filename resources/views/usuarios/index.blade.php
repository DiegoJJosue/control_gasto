@extends('layouts.app')
@section('content')
<div class="container">
	<thead class="table-dark">
		
		
<h2 class="bg-dark text-white">Lista de Usuarios</h2>
<a href="{{route('usuarios.create')}}" class="btn btn-primary">Nuevo</a>
<table class="table table-striped " >
	<th>#</th>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Telefono</th>
	<th>Email</th>
	<th>Cedula</th>
	@foreach($users as $u)
	<tr>
		<td>{{$loop->iteration}}</td>
		<td>{{$u->usu_nombre}}</td>
		<td>{{$u->usu_apellido}}</td>
		<td>{{$u->usu_telefono}}</td>
		<td>{{$u->email}}</td>
		<td>{{$u->usu_cedula}}</td>
	</tr>
	@endforeach
</table>
	</thead>
	</div>
</div>
@endsection  