@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-4xl font-bold text-center mb-6">Welcome to DeshiBid</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($products as $product)
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="{{ $product->image }}" class="w-full h-40 object-cover rounded">
                <h2 class="text-lg font-bold mt-2">{{ $product->name }}</h2>
                <p class="text-gray-600">Starting Price: ${{ $product->starting_price }}</p>
                <a href="{{ route('product.show', $product->id) }}" class="mt-4 block bg-blue-500 text-white text-center py-2 rounded hover:bg-blue-700">
                    View Auction
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
