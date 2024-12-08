@extends('base')

@section('title', 'Home')

@section('content')
    <h1>Welcome to the Home Page</h1>
    <p>Start shopping using "Shop" or "Contact us" if any problems occur.</p>
    <img src="https://i.pinimg.com/736x/43/b8/f7/43b8f757efbe31ed48e6875165f3ee5d.jpg"/>

    @auth
        <p>Welcome, {{ auth()->user()->name }}!</p><br />
        <a class="log-btn" href="{{ route('profile') }}">Profile</a>  
        @if(auth()->user()->name === 'admin')
            <p>
                <br />
                <a class="log-btn" href="{{ route('dashboard') }}">Dashboard</a>
            </p>
        @endif
    @endauth
@endsection
