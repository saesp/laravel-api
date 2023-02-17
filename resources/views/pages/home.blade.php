@extends('layouts.main')


@section('content')

    <h1 class="m-4">Home</h1> 
    <a href="{{route('movie.home')}}">Movies List</a> 
    
    {{-- genres --}}
    <ul>
        <h2>Genres</h2>
        @foreach ($genres as $genre)
        <li class="list-unstyled">
            <h3>{{ ucfirst($genre->name) }}</h3>

            {{-- movies --}}
            <ul>
                <h3>Movies</h3>
                @foreach ($genre->movies as $movie)
                    <li>
                        <h4>{{ ucfirst($movie->title) }}</h4>

                        {{-- tags --}}
                        <ul> 
                            <i><b>Tags</b></i>
                            @foreach ($movie->tags as $tag)
                                <li>{{ $tag->name }}</li>
                            @endforeach
                        </ul>
                        
                    </li>
                @endforeach
            </ul>

        </li>
        @endforeach
    </ul>

@endsection