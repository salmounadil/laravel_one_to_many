@extends('layouts.app')
@section('content')
<h1 class="text-center p-5 d-flex flex-column gap-5 justify-content-center">Membres <a href="/membre/create" class="btn btn-success">Create New Membre</a></h1>
<section class="membres d-flex flex-wrap justify-content-center gap-3">
    @foreach ($membres as $membre )
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('storage/'.$membre->image) }}" class="card-img-top {{ $membre->genre->genre == "homme" ? "border border-5 border-danger" :  ( $membre->genre->genre == "femme" ? "border border-5 border-primary " : "rounded-circle" ) }}" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $membre->nom }}</h5>
          <p class="card-text">{{ $membre->age }} ans</p>
          <p class="card-text">{{ $membre->genre->genre }}</p>
          <a href="/membre/download/{{ $membre->id }}" class="btn btn-success">Download</a>
        </div>
      </div>
    @endforeach
</section>
@endsection