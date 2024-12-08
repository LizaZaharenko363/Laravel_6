@extends('base')

@section('title', 'Create new')

@section('content')
    <h1>Update your kitty :3</h1>
    <div class="container">
    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description" required>{{ old('description', $product->description) }}</textarea>
        </div>
        <div>
            <label for="price">Price:</label>
            <input name="price" id="price" value="{{ old('price', $product->price) }}" required>
        </div>
        <div>
            <label for="image_url">Image URL:</label>
            <input type="text" name="image_url" id="image_url" value="{{ old('image_url', $product->image_url) }}" required>
        </div>
        <div>
            <button type="submit">Update Product</button>
        </div>
    </form>
    </div>

@endsection