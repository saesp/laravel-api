@extends('layouts.main')


@section('content')

    <h2>Home</h2>
    
    {{-- genres --}}
    <ul>
        @foreach ($genres as $genre)
        <li>
            <h3>Genre: {{$genre->name }}</h3>

            {{-- movies --}}
            <ul>
                @foreach ($genre->movies as $movie)
                    <li>
                        <h4>Movie: {{ $movie->title }}</h4>

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