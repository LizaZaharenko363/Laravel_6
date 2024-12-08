<!-- resources/views/profile/show.blade.php -->

@extends('base')

@section('title', 'Profile')

@section('content')
    <h1>User Profile</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div>
        <strong>Name:</strong> {{ $user->name }}
    </div>
    <div>
        <strong>Email:</strong> {{ $user->email }}
    </div>

    <div>
        <strong>Joined on:</strong> {{ $user->created_at->format('d M Y') }}
    </div>

@endsection
