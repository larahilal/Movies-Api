@extends('layout')

@section('my_account')

Hello! These are your movies:</br></br>

	@foreach ($movies as $movie)


	{{$movie->movie_title}} <a href="http://127.0.0.1:8000/edit_form?movieId={{ $movie->id}}">edit</a> <a href="http://127.0.0.1:8000/delete?movieId={{ $movie->id }}">delete</a>

	</br>


	@endforeach


@stop