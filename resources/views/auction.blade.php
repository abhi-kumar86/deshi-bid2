@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-4xl font-bold text-center mb-6">{{ $product->name }}</h1>
    <img src="{{ $product->image }}" class="w-full h-64 object-cover rounded mb-6">
    <p class="text-gray-600 mb-4">Starting Price: ${{ $product->starting_price }}</p>
    <a href="{{ route('bid.create', $product->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
        Place Bid
    </a>
</div>
@endsection
