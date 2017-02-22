@extends('layout')

@section('content_loggedinHome')

Welcome!

</br></br>

Enter the movie title you are looking for:

</br>
                    
<form action="/" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">


     <input type="text" name="movie_title"></br>

    <input type="submit" value="Submit">

</form>

</br>

Add a movie: <a href="http://127.0.0.1:8000/insert_movie_form">Here</a>

</br></br>

<a href="http://127.0.0.1:8000/my_account">My account</a>

</br></br>

Want to log out? Click <a href="http://127.0.0.1:8000/logout"> here</a>



@stop