@extends('layout')

@section('login_form')

<form action="handle_login" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    Email
    <input type="text" name="email"></br>

    Password:

    <input type="text" name="password"></br>

    Submit:
    <input type="submit" value="Login">

</form>

@endsection
