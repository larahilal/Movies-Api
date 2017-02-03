@extends('layout')

@section('retrieve_to_edit')

Enter the movie title you'd like to edit:
                    
<form action="retrieve_to_edit" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <input type="text" name="movie_title"></br></br>

    <input type="submit" value="Submit">

</form>

@stop

