<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Flower Hub</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
</head>
<body class="bg-gray-100">

    <div class="bg-green-500 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold"><a href="/">Local Flower Hub</a></h1>
            </div>
            <div class="flex items-center space-x-4">
                <p class="cursor-pointer">Search</p>
                <div class="flex items-center space-x-4">
                    <p class="cursor-pointer">Orders</p>
                    <p class="cursor-pointer">Cart</p>                 
                </div>
                @auth
                    <p class="cursor-pointer">Hello, {{ auth()->user()->name }}</p>
                    <form action="/logout" method="POST" class="inline-block">
                        @csrf
                        <button type="submit" class="text-white">Log Out</button>
                    </form>
                @else
                    <p class="cursor-pointer"><a href="/login">Hello, sign in or register</a></p>
                @endauth
            </div>
        </div>
    </div>

    <main class="container mx-auto mt-4">
        @yield('content')
    </main>

    <!-- Flash for success -->
    <x-success-message />

    <footer class="bg-gray-200 p-4 text-center">
        <p>Contact Us</p>
    </footer>

</body>
</html>
