@extends('base')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>

    <h2>List of Users</h2>

    @if ($users->isEmpty())
        <p>No users found.</p>
    @else
        <ul>
            @foreach ($users as $user)
                <li>
                    <strong>{{ $user->name }}</strong> ({{ $user->email }})
                </li>
            @endforeach
        </ul>
    @endif
@endsection
