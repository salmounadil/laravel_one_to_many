@extends('layouts.app')
@section('content')
    <h1 class="text-center p-5 d-flex flex-column gap-5 justify-content-center">Genres <a href="/genre/create" class="btn btn-success">Create New Genre</a></h1>
  <div class="genres">
    @foreach ($genres as $genre )
        <h1>{{ $genre->id }} {{ $genre->genre }}</h1>
    @endforeach
  </div>
@endsection