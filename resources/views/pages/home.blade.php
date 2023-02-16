@extends('layouts.main')


@section('content')
    <h2>Movies</h2>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <a href="{{route('movie.show', $movie)}}">{{$movie->title}}</a> [{{$movie->code}}]
            </li>
        @endforeach
    </ul>
@endsection