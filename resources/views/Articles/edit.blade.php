@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6">Edit Article</h1>
        <form action="{{ route('articles.update', $article->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Image URL</label>
                <input type="text" name="image" id="image" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ $article->image }}" required>
            </div>
            <div class="mb-4">
                <label for="titre" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="titre" id="titre" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ $article->titre }}" required>
            </div>
            <div class="mb-4">
                <label for="prix" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="number" name="prix" id="prix" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ $article->prix }}" required>
            </div>
            <div class="mb-4">
                <label for="contenu" class="block text-sm font-medium text-gray-700">Content</label>
                <textarea name="contenu" id="contenu" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" rows="5" required>{{ $article->contenu }}</textarea>
            </div>
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Update
            </button>
        </form>
        <a href="{{ route('articles.index') }}" class="inline-block mt-4 px-4 py-2 bg-gray-600 text-white text-sm font-medium rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
            Back to List
        </a>
    </div>
@endsection