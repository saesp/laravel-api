@extends('layouts.main')


@section('content')
    <h2>Movies</h2>

    <a href="{{route('movie.create')}}"><button>CREATE NEW MOVIE</button></a>

    <ul>
        @foreach ($movies as $movie)
            <li>
                {{$movie->title}} --- <a href="{{route('movie.edit', $movie)}}"><button>Edit</button></a>
            </li>
        @endforeach
    </ul>
@endsection