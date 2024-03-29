@extends('layouts.main')


@section('content')
    <h2>Create new movie</h2>
    <form action="{{ route('movie.update') }}" method="POST">
        @csrf

        <label for="title">Title</label>
        <input type="text" name="title" value="{{$movie->title}}">
        
        <label for="originalTitle">Original title</label>
        <input type="text" name="original_title" value="{{$movie->original_title}}">
        
        <label for="plot">Plot</label>
        <input type="text" name="plot" value="{{$movie->plot}}">
        
        <label for="vote">Vote</label>
        <input type="text" name="vote" value="{{$movie->vote}}">

        <label for="releaseDate">ReleaseCdate</label>
        <input type="text" name="release_date" value="{{$movie->release_date}}">

        <br>
        <label for="genreId">Genre</label>
        <select name="genre_id" id="">
            @foreach ($genres as $genre)
                <option value="{{$genre->id}}" @selected($movie->genre->id == $genre->id)>
                    {{ucfirst($genre->name)}}
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
