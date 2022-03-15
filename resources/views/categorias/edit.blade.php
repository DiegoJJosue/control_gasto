@extends('layouts.app')
@section('content')

<h4 class="bg-dark text-while">Editar Categoria</h4>
<h1>Editar Categorias</h1>

<form action="{{route('categorias.update',$categorias->cat_id)}}" method="POST" >  
 @csrf
<label for=""> Detalle de categoria</label>
<input type="text" value="{{$categorias->cat_nombre}}" name="cat_nombre" id="cat_nombre">
<button type="submit" class="btn btn-primary">Guardar</button>

</form>
@endsection