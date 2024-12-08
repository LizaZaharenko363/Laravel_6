@extends('base')

@section('title', 'Shop')

@section('content')
    <div class="create-btn">
        <a href="{{ route('product.createform') }}">Create New Product</a>
    </div>

    <div class="product-container">
        @foreach ($products as $product)
            <div class="prod">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
                <p>{{ $product->price }} UAH</p>
                @if($product->image_url)
                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}">
                @else
                    <img src="https://i.pinimg.com/736x/70/5b/c6/705bc6ff8042d791a1a59f3a9dabf0c1.jpg" alt="No photo">
                @endif
                <a href="{{ route('product.show', $product->id) }}">View Details</a>
            </div>
        @endforeach
    </div>

@endsection
