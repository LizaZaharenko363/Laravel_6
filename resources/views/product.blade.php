@extends('base')

@section('title', 'Product')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>Price: {{ $product->price }} uah</p>
    @if($product->image_url)
        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" />
    @else
        <img src="https://i.pinimg.com/736x/70/5b/c6/705bc6ff8042d791a1a59f3a9dabf0c1.jpg" alt="no photo" />
    @endif

    <a href="{{ route('product.edit', $product->id) }}" class="edit-btn">Edit</a>

    <form action="{{ route('product.delete', $product->id) }}" method="POST" class="del-btn" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure you want to delete this car? :(');">
            Delete
        </button>
    </form>
@endsection
