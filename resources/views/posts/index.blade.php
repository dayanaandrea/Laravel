@extends('layouts.app')
@section('content')
<div class="container">
@foreach ($posts as $post)
  {{-- visualizamos los atributos del objeto --}}
 
  <div class="card" id="IndexCard">
      <a href="{{route('posts.show',$post)}}"> {{$post->titulo}}</a>.
      Escrito el {{$post->created_at}}
      <a class="btn btn-warning btn-sm" href="{{route('posts.edit',$post)}}"
        role="button" id="cardButton">Editar</a>

      <form action="{{route('posts.destroy',$post)}}" method="POST">
        @csrf
        @method('DELETE')
        <button id="cardButton" class="btn btn-sm btn-danger" type="submit"
          onclick="return confirm('Are you sure?')">Delete
        </button>
      </form>
    </div>
@endforeach
</div>
@endsection