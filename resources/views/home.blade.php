@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Movies</h1>
    @forelse ($movies as $movie)
    <div class="movie">
        <h3>{{$movie->title}}</h3>
        <div class="description">
            <p>Titolo: {{$movie->original_title}}</p>
            <p>Nazionalità: {{$movie->nationality}}</p>
            <p>Data rilascio: {{$movie->date}}</p>
            <span>Voto: {{$movie->vote}}</span>
        </div>
    </div>
    
    @empty
       <p class="alert"> Sorry no movies available</p>
    @endforelse
</div>

@endsection