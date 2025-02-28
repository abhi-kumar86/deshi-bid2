@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-4xl font-bold text-center mb-6">Welcome to DeshiBid</h1>
    <a href="{{ route('auction.index') }}" class="mt-4 block bg-blue-500 text-white text-center py-2 rounded hover:bg-blue-700">
        View Auctions
    </a>
</div>
@endsection
