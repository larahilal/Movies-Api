@extends('layout')

@section('edit_form')

<form action="update" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">


    Movie Title:
    <input type="text" name="movie_title" value="{{ $movie->movie_title }}"></br>

    Year Released:
    <input type="text" name="year_released" value="{{ $movie->year_released }}"></br>

    Description:
    <input type="text" name="description" value="{{ $movie->description }}"></br>

    <input type="hidden" name="movieId" value="{{ $movie->id }}">

    </br>

    Submit:
    <input type="submit" value="update">

</form>

@stop

