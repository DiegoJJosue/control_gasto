@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido a la empreza :D') }}
        <div align="center"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/LOGO_FAGOR.jpg/640px-LOGO_FAGOR.jpg"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
