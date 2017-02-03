@extends('layout')

@section('my_account')

Hello! These are your movies:</br></br>

	@foreach ($movies as $movie)


	{{$movie ->movie_title}}

	</br>


	@endforeach

</br>	

Click to <a href="http://127.0.0.1:8000/retrieve_to_edit">edit</a> or <a href="http://127.0.0.1:8000/delete">delete</a> an entry.



@stop