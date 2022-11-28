@extends('layouts.app')
@section('content')
    <section class="d-flex flex-column gap-5 align-items-center">
        <h1 class="text-center p-5">New genre</h1>
        <form action="/genre" method="POST">
            @csrf
            <label for="">Nom :</label>
            <input type="text" name="genre" id="">
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </section>
@endsection