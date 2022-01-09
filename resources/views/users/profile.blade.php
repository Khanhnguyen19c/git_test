@extends('welcome')
@section('content')
<h1>{{ Session::get('user')['user_name'] }}</h1>
<p>{{ Session::get('user')['user_email'] }}</p>
<p>@if (Session::get('user')['user_type'] === 'Admin')
    Admin
    @else
    User thường
@endif</p>
@endsection
