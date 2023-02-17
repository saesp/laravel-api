@extends('layouts.main')


@section('content')
    <h1 class="">Movies list</h1>
    <a href="{{route('home')}}">Home</a> 

    <br><br><br>

    <a href="{{route('movie.create')}}"><button>CREATE NEW MOVIE</button></a>

    <ul>
        @foreach ($movies as $movie)
            <li>
                {{ucfirst($movie->title)}} --- 
                <a href="{{route('movie.edit', $movie)}}"><button>Edit</button></a> 
                <a href="{{route('movie.delete', $movie)}}"><button>Delet</button></a>
            </li>
        @endforeach
    </ul>
@endsection