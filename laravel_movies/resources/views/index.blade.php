@extends('layouts.main')

@section('content')
    <div>
        <div>
            <h2>Popular Movies</h2>
            <div>
                @foreach($popularMovies as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres" />
                @endforeach
            </div>
        </div>

        <div>
            <h2>Сейчас идет в кино</h2>
            <div>
                @foreach($nowPlayingMovies as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres" />
                @endforeach
            </div>
        </div>

    </div>
@endsection
