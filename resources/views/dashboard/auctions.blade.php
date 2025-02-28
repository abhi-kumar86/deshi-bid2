@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-4xl font-bold text-center mb-6">Manage Auctions</h1>
    <a href="{{ route('auction.create') }}" class="block bg-blue-500 text-white text-center py-2 rounded hover:bg-blue-700 mb-4">
        Create New Auction
    </a>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($auctions as $auction)
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="{{ $auction->image }}" class="w-full h-40 object-cover rounded">
                <h2 class="text-lg font-bold mt-2">{{ $auction->name }}</h2>
                <p class="text-gray-600">Starting Price: ${{ $auction->starting_price }}</p>
                <a href="{{ route('auction.edit', $auction->id) }}" class="mt-4 block bg-yellow-500 text-white text-center py-2 rounded hover:bg-yellow-700">
                    Edit Auction
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
