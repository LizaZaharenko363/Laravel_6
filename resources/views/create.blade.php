@extends('base')

@section('title', 'Create new')

@section('content')
    <h1>Create your kitty</h1>
    <form action="{{ route('product.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required value="{{ old('name') }}">
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description" required>{{ old('description') }}</textarea>
        @error('description')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" required value="{{ old('price') }}">
        @error('price')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="image_url">Image URL:</label>
        <input type="text" name="image_url" id="image_url" value="{{ old('image_url') }}">
        @error('image_url')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <button type="submit">Create Product</button>
    </div>
</form>

@endsection