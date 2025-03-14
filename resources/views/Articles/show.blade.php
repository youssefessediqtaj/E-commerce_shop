@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-6">{{ $article->titre }}</h1>
        <div class="bg-white rounded-lg overflow-hidden shadow-sm">
            <img src="{{ $article->image }}" alt="{{ $article->titre }}" class="w-full h-96 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-semibold mb-4">{{ $article->titre }}</h2>
                <p class="text-gray-700 mb-4">{{ $article->contenu }}</p>
                <p class="text-lg font-medium text-gray-900">
                    <strong>Price:</strong> ${{ $article->prix }}
                </p>
                <div class="mt-6 space-x-4">
                    <a href="{{ route('articles.edit', $article->id) }}" class="inline-block px-4 py-2 bg-yellow-500 text-white text-sm font-medium rounded-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                        Edit
                    </a>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-red-500 text-white text-sm font-medium rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500" onclick="return confirm('Are you sure?')">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <a href="{{ route('articles.index') }}" class="inline-block mt-6 px-4 py-2 bg-gray-600 text-white text-sm font-medium rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
            Back to List
        </a>
    </div>
@endsection