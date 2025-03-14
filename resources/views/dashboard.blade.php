{{-- @extends('layouts.app')

@section('content')
        <!-- Card Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-6">
            @foreach($cards as $item)
                <div class="bg-white p-4 rounded-lg shadow-md text-center">
                    <!-- Image -->
                    <img src="{{ asset($item['image']) }}" alt="Image" class="w-full h-40 object-cover rounded-md">
                    <!-- Title -->
                    <h3 class="text-lg font-semibold mt-2">{{ $item['titre'] }}</h3>
                    <!-- Price -->
                    <p class="text-gray-600">Prix: {{ $item['prix'] }} DH</p>
                    <!-- Details Link -->
                    <a href="{{ url('/details', ['id' => $loop->index]) }}" class="mt-2 inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Voir Taille</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection --}}

@extends('layouts.app')

@section('content')
    <!-- Card Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-6">
        @foreach($articles as $article)
            <div class="bg-white p-4 rounded-lg shadow-md text-center">
                <!-- Image -->
                <img src="{{ asset($article->image) }}" alt="Image" class="w-full h-40 object-cover rounded-md">
                <!-- Title -->
                <h3 class="text-lg font-semibold mt-2">{{ $article->titre }}</h3>
                <!-- Price -->
                <p class="text-gray-600">Prix: {{ $article->prix }} DH</p>
                <!-- Details Link -->
                <a href="{{ route('product.details', ['id' => $article->id]) }}" class="mt-2 inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Voir Taille</a>
            </div>
        @endforeach
    </div>
@endsection