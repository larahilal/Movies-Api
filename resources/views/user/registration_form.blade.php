@extends('layout')

@section('register_user')

<form action="user_registration" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

   	First Name:
    <input type="text" name="first_name"></br>

    Last Name:
    <input type="text" name="last_name"></br>

    Email:
    <input type="text" name="email"></br>

    Password:

    <input type="text" name="password"></br>

    Submit:
    <input type="submit" value="Submit">

</form>



@stop

