@extends('base')

@section('title', 'Register')

@section('content')
    <h1>JOIN US >:D</h1>
    
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input class="log-form" type="text" name="name" placeholder="Name" required>
        <input class="log-form" type="email" name="email" placeholder="Email" required>
        <input class="log-form" type="password" name="password" placeholder="Password" required>
        <input class="log-form" type="password" name="password_confirmation" placeholder="Confirm Password" required>
        <button type="submit">Register</button>
    </form>

    <p>Already have an account? <a class="log-href" href="{{ route('login') }}">Login here</a></p>
@endsection
