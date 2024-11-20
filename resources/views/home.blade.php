@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" id="card">
                <div class="card-header">Create</div>

                <div class="card-body"> 
                <label>Crea un nuevo post </label> </br>
                <button id="boton"><a class="nav-link" href="{{ route('posts.create') }}">Crear</a></button>
                </div>
            </div>
            <br>
            <div class="card" id="card">
                <div class="card-header">Ver</div>

                <div class="card-body">
                <label>Ver nuestros posts</label> </br>
                <button id="boton"><a class="nav-link" href="{{ route('posts.index') }}">Ver</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
