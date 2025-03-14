@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-6">{{ $article->titre }}</h1>
        <div class="bg-white rounded-lg overflow-hidden shadow-sm">
            <img src="{{ asset($article->image) }}" alt="{{ $article->titre }}" class="w-full h-96 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-semibold mb-4">{{ $article->titre }}</h2>
                <p class="text-gray-700 mb-4">{{ $article->contenu }}</p>
                <p class="text-lg font-medium text-gray-900">
                    <strong>Price:</strong> {{ $article->prix }} DH
                </p>
                <div class="mt-6">
                    <a href="{{ route('order') }}" class="inline-block px-4 py-2 bg-gray-600 text-white text-sm font-medium rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        Order Now
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection