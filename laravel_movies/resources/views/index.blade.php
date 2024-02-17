@extends('layouts.main')

@section('content')
    <div>
        <div>
            <h2>Popular Movies</h2>
            <div>

                @foreach($popularMovies as $movie)
                    <div>
                        <a href="#">
{{--                            <img src="/img/test.png" width="400">--}}
                            <img src="{{ 'https://image.tmdb.org/t/p/w500' . $movie['poster_path'] }}">
                        </a>
                        <div>
                            <a href="#">{{ $movie['title'] }}</a>
                            <div>
                                <span>{{ $movie['vote_average'] }}</span>
                                <span>|</span>
                                <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                            </div>
                            <div>
                                @foreach($movie['genre_ids'] as $genre)
                                    {{ $genres->get($genre) }} @if (!$loop->last),@endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                @endforeach


            </div>
        </div>

        <div>
            <h2>Сейчас идет в кино</h2>
            <div>

                @foreach($nowPlayingMovies as $movie)
                    <div>
                        <a href="#">
                            {{--                            <img src="/img/test.png" width="400">--}}
                            <img src="{{ 'https://image.tmdb.org/t/p/w500' . $movie['poster_path'] }}">
                        </a>
                        <div>
                            <a href="#">{{ $movie['title'] }}</a>
                            <div>
                                <span>{{ $movie['vote_average'] }}</span>
                                <span>|</span>
                                <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                            </div>
                            <div>
                                @foreach($movie['genre_ids'] as $genre)
                                    {{ $genres->get($genre) }} @if (!$loop->last),@endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                @endforeach


            </div>
        </div>

    </div>
@endsection
