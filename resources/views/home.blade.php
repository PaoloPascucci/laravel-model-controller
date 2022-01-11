@extends('layouts.app')

@section('content')

<h1>Movies</h1>
<div class="container">
    @forelse ($movies as $movie)
    <div class="movie">
        <h3>{{$movie->title}}</h3>
        <div class="description">
            <p class="Title">Titolo: {{$movie->original_title}}</p>
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