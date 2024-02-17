@extends('layouts.main')

@section('content')
    <div>
        <div>
            <img src="/img/test.png" width="600">
            <div>
                <h2>{{ $movie['title'] }}</h2>
                <div>
                    <span>{{ $movie['vote_average'] }}</span>
                    <span>|</span>
                    <span>{{ \Carbon\Carbon::rawParse($movie['release_date'])->format('M d, Y') }}</span>
                    <span>|</span>
                    <span>
                         @foreach($movie['genres'] as $genre)
                            {{ $genre['name'] }} @if (!$loop->last),@endif
                        @endforeach
                    </span>
                </div>

                <p>{{ $movie['overview'] }}</p>

                <div>
                    <h4>Feature Cast</h4>
                    <div>
                        @foreach($movie['credits']['crew'] as $crew)
                            @if ($loop->index < 2)
                                <div>
                                    <div>{{ $crew['name'] }} - {{ $crew['job'] }}</div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <br>
                <br>
                <div>
                    <a href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}">
                        <span>Play Trailer</span>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div>
        <div>
            <h2>Cast</h2>
            Movies
        </div>
    </div>

@endsection
