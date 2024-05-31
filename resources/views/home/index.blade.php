@extends('layouts.app-master')

@section('content')
    @guest
    <div class="bg-light m-2">
        <h1>Home Page</h1>
        <p>You are in home page as a guest.</p>
    </div>
    @endguest

    @auth
    <div class="bg-light m-2">
        <h1>Home Page</h1>
        <p>You are in home page as a user</p>
    </div>
    @endauth
@endsection