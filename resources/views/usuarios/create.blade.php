@extends('layouts.app')
@section('content')
<div class="container">
	 <div class="row justify-content-center">
	 	<div class="col-md-8">
	 		<div class="card">

<script src="{{asset('js/usuario.js')}}"></script>

	<h4 class="bg-dark text-white ">Formulario de registro</h4>
	<form action="{{route('usuarios.store')}}" method="POST" onsubmit="return validar()">
		@csrf


		 <div class="form-group row">
                            <label for="usu_nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="usu_nombre" type="text" class="form-control @error('usu_nombre') is-invalid 
                                @enderror" name="usu_nombre" value="{{ old('usu_nombre') }}" required autocomplete="usu_nombre" autofocus>
                                @error('usu_nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

		        <div class="form-group row">
                            <label for="usu_apellido" class="col-md-4 col-form-label text-md-right">Apellido</label>
                            <div class="col-md-6">
                                <input id="usu_apellido" type="text" class="form-control @error('usu_apellido') is-invalid 
                        @enderror" name="usu_apellido" value="{{ old('usu_apellido') }}" required autocomplete="usu_apellido" autofocus>
                                @error('usu_apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



			    <div class="form-group row">
                            <label for="usu_direccion" class="col-md-4 col-form-label text-md-right">Direccion</label>
                            <div class="col-md-6">
                                <input id="usu_direccion" type="text" class="form-control @error('usu_direccion') is-invalid 
                        @enderror" name="usu_direccion" value="{{ old('direccion') }}" required autocomplete="usu_direccion" autofocus>
                                @error('usu_direccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

			    <div class="form-group row">
                            <label for="usu_telefono" class="col-md-4 col-form-label text-md-right">Numero de Telefono</label>
                            <div class="col-md-6">
                                <input id="usu_telefono" type="text" class="form-control @error('usu_telefono') is-invalid 
                                @enderror" name="usu_telefono" value="{{ old('usu_telefono') }}" required autocomplete="usu_telefono" autofocus>
                                @error('usu_telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 

			    <div class="form-group row">
                            <label for="usu_cedula" class="col-md-4 col-form-label text-md-right">Cedula</label>
                            <div class="col-md-6">
                                <input id="usu_cedula" type="text" class="form-control @error('usu_cedula') is-invalid 
                                @enderror" name="usu_cedula" value="{{ old('usu_cedula') }}" required autocomplete="usu_cedula" autofocus>
                                @error('usu_cedula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

 			   <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Correo Electronico</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

 			     <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


		<button class="btn btn-success" style="margin-left: 55%;">Guardar</button>
		

	</form>
</div>
</div>
</div>
</div>

@endsection