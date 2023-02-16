@extends('layouts.main')


@section('content')
    <ul>
        @foreach ($movies as $movie)
            <li>
                {{$movie->code}}
            </li>
        @endforeach
    </ul>
@endsection