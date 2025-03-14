<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FullCalendar CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>shop class</title>
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-white p-4 shadow-md flex justify-between items-center">
        <div class="space-x-4">
            <a href="#" class="text-gray-700 hover:text-blue-500">Home</a>
            <a href="{{ route('dashboard') }}">Dashboard</a>            
            <a href="{{ route('articles.create')}}" class="text-gray-700 hover:text-blue-500">Add Product</a>
            <a href="{{ route('articles.index')}}" class="text-gray-700 hover:text-blue-500">products managements</a>
        </div>
        <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Se connecter</button>
    </nav>

    <div class="p-2  transition-all duration-300 ease-in-out"  id="content">
        @yield('content')
    </div>
</body>

</html>