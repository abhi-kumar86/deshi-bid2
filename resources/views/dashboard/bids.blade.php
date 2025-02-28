@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-4xl font-bold text-center mb-6">Manage Bids</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($bids as $bid)
            <div class="bg-white shadow-lg rounded-lg p-4">
                <h2 class="text-lg font-bold mt-2">Bidder: {{ $bid->user->name }}</h2>
                <p class="text-gray-600">Bid Amount: ${{ $bid->amount }}</p>
                <p class="text-gray-600">Auction: {{ $bid->auction->name }}</p>
                <a href="{{ route('bid.show', $bid->id) }}" class="mt-4 block bg-blue-500 text-white text-center py-2 rounded hover:bg-blue-700">
                    View Bid
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
