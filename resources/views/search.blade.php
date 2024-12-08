@extends('base')

@section('title', 'Results')

@section('content')
    <div class="search-container">
        <h1>Search Results for "{{ $query }}"</h1>

        @if(isset($uniqueProducts) && $uniqueProducts->isNotEmpty())
            <div class="product-container">
                @foreach ($uniqueProducts as $product)
                    <div class="prod">
                        <h3>{{ $product->name }}</h3>
                        <p>{{ $product->description }}</p>
                        <p>{{ $product->price }} UAH</p>
                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}">
                        <a href="{{ route('product.show', $product->id) }}">View Details</a>
                    </div>
                @endforeach
            </div>
        @else
            <p>No products found for "{{ $query }}"</p>
        @endif
    </div>
@endsection