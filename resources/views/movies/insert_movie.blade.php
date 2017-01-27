@extends('layout')

@section('insert_movie')

<form action="store_new_movie" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    
    Want to add a NEW movie and a NEW director? Click <a href="http://127.0.0.1:8000/insert_movie_with_new_director_form">Here</a>

    </br>


    Movie Title:
    <input type="text" name="movie_title"></br>

    Year Released:
    <input type="text" name="year_released"></br>

    Description:
    <input type="text" name="description"></br>

    Choose an existing director:
    <select name="director_id">

        @foreach($directors as $director)
            
            <option value="{{ $director->id }}">{{ $director->first_name . ' ' . $director->last_name }}</option>

        @endforeach

    </select>

    </br>
    </br>

    Submit:
    <input type="submit" value="Submit">

</form>

@stop




