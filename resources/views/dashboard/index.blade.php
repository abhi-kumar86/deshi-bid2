@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-4xl font-bold text-center mb-6">Dashboard</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <a href="{{ route('dashboard.auctions') }}" class="block bg-blue-500 text-white text-center py-2 rounded hover:bg-blue-700">
            Manage Auctions
        </a>
        <a href="{{ route('dashboard.bids') }}" class="block bg-green-500 text-white text-center py-2 rounded hover:bg-green-700">
            Manage Bids
        </a>
    </div>
</div>
@endsection
