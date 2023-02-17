@extends('layouts.main')


@section('content')
    <h2>Create new movie</h2>
    <form action="{{ route('movie.store') }}" method="POST">
        @csrf

        <label for="title">Title</label>
        <input type="text" name="title">
        
        <br>
        <label for="original_title">Original title</label>
        <input type="text" name="original_title">
        
        <br>
        <label for="code">Code</label>
        <input type="text" name="code">
        
        <br>
        <label for="plot">Plot</label>
        <input type="text" name="plot">
        
        <br>
        <label for="vote">Vote</label>
        <input type="number" name="vote">

        <br>
        <label for="release_date">Release date</label>
        <input type="date" name="release_date">

        <br>
        <label for="genre_id">Genre</label>
        <select name="genre_id">
            @foreach ($genres as $genre)
                <option value="{{ $genre -> id }}">
                    {{ $genre -> name }}
                </option>
            @endforeach
        </select>

        <br>
        <label>Tag</label>
        <br>
        @foreach ($tags as $tag)
            <input type="checkbox" name="tags_id[]" value="{{ $tag -> id }}" id="{{ $tag -> id }}">
            <label for="{{ $tag -> id }}">{{ $tag -> name }}</label>
            <br>
        @endforeach

        <br>
        <button type="submit">CREATE</button>

    </form>
@endsection


{{-- <label for="title">title</label>
        <input type="text" name="title" value="title">
        
        <label for="original_title">original_title</label>
        <input type="text" name="original_title" value="original_title">
        
        <label for="code">code</label>
        <input type="text" name="code" value="code">
        
        <label for="plot">plot</label>
        <input type="text" name="plot" value="plot">
        
        <label for="vote">vote</label>
        <input type="text" name="vote" value="vote">

        <label for="release_date">release_date</label>
        <input type="text" name="release_date" value="release_date"> --}}
