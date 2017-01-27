@extends('layout')

@section('insert_movie_with_new_director')

<form action="store_new_movie_with_new_director" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    Movie Title:
    <input type="text" name="movie_title"></br>

    Year Released:
    <input type="text" name="year_released"></br>

    Description:
    <input type="text" name="description"></br>

    Enter a new director:

    Director's first name

    <input type="text" name="first_name"></br>

    Director's last name

    <input type="text" name="last_name"></br>

    </br>

    Submit:
    <input type="submit" value="Submit">

</form>

@stop

