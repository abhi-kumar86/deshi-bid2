@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-4xl font-bold text-center mb-6">Place Your Bid</h1>
    <form action="{{ route('bid.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="bidding_key" class="block text-gray-700">Bidding Key</label>
            <input type="text" id="bidding_key" name="bidding_key" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="bid_amount" class="block text-gray-700">Bid Amount</label>
            <input type="number" id="bid_amount" name="bid_amount" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Place Bid
        </button>
    </form>
</div>
@endsection
