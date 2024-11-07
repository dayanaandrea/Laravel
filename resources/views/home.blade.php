@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" id="card">
                <div class="card-header">{{ __('Create') }}</div>

                <div class="card-body"> 
                <label>{{ __('Crea un nuevo post ') }}</label> </br>
                <button id="boton"><a class="nav-link" href="{{ route('login') }}">{{ __('Crear') }}</a></button>
                </div>
            </div>

            <div class="card" id="card">
                <div class="card-header">{{ __('Edit') }}</div>

                <div class="card-body">
                <label>{{ __('Edita uno de nuestros posts ') }}</label> </br>
                    <button id="boton"><a class="nav-link" href="{{ route('login') }}">{{ __('Editar') }}</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
