@extends('layout')

@section('content')

	@foreach ($movies as $movie)


	{{$movie ->movie_title}}

	</br>


	@endforeach


@stop