@extends('layouts.app')
@section('content')
    <section class="d-flex flex-column gap-5 align-items-center">
        <h1 class="text-center p-5">New membre</h1>
        <form action="/membre" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">Nom :</label>
            <input type="text" name="nom" id="">
            <label for="">Age :</label>
            <input type="number" name="age" id="">
            <label for="">Image: :</label>
            <input type="file" name="image" id="">
            <label for="">Genre :</label>
            <select name="genre_id" id="">
                @foreach ($genres as $genre )
                    <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </section>
@endsection