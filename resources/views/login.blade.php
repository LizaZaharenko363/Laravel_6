@extends('base')

@section('title', 'Cart')

@section('content')
    <h1>Login pretty please</h1>
    
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input class="log-form" type="email" name="email" placeholder="Email" required>
        <input class="log-form" type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a class="log-href" href="{{ route('register') }}">Register here</a></p>
@endsection