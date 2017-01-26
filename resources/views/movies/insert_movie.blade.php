@extends('layout')

@section('insert_movie')

<form action="store_new_movie" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    Movie Title:
    <input type="text" name="movie_title"></br>

    Year Released:
    <input type="text" name="year_released"></br>

    Description:
    <input type="text" name="description"></br>

    @foreach($directors as $director)

    	{{$director}}


    @endforeach

    Submit:
    <input type="submit" value="Submit">

</form>

@stop




