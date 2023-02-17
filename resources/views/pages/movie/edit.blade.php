@extends('layouts.main')


@section('content')
    <h2>Create new movie</h2>
    <form action="{{ route('movie.update') }}" method="POST">
        @csrf

        <label for="title">title</label>
        <input type="text" name="title" value="{{$movie->title}}">
        
        <label for="originalTitle">original_title</label>
        <input type="text" name="original_title" value="{{$movie->original_title}}">
        
        <label for="code">code</label>
        <input type="text" name="code" value="{{$movie->code}}">
        
        <label for="plot">plot</label>
        <input type="text" name="plot" value="{{$movie->plot}}">
        
        <label for="vote">vote</label>
        <input type="text" name="vote" value="{{$movie->vote}}">

        <label for="releaseDate">release_date</label>
        <input type="text" name="release_date" value="{{$movie->release_date}}">

        <br>
        <label for="genreId">Genre</label>
        <select name="genre_id" id="">
            @foreach ($genres as $genre)
                <option value="{{$genre->id}}" @selected($movie->genre->id == $genre->id)>
                    {{$genre->name}}
                </option>
            @endforeach
        </select>
        

        <br>
        <label for="">Tag</label>
        <br>
        @foreach ($tags as $tag)
            <input type="checkbox" name="tags_id[]" value="{{$tag->id}}" id="{{$tag->id}}"
            @foreach ($movie->tags as $movieTag)
                @checked($movieTag->id == $tag->id)
            @endforeach >
            
            <label for="{{$tag->id}}">{{$tag->name}}</label> 
            <br>
        @endforeach
        

        <br>
        <button type="submit">EDIT</button>

    </form>
@endsection
