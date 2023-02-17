@extends('layouts.main')


@section('content')
    <h2>Movies</h2>

    <a href="{{route('movie.create')}}"><button>CREATE NEW MOVIE</button></a>

    <ul>
        @foreach ($movies as $movie)
            <li>
                {{$movie->title}}
            </li>
        @endforeach
    </ul>
@endsection