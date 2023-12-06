<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Flower Hub</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">

    <div class="bg-green-500 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold"><a href="/">Local Flower Hub</a></h1>
            </div>
            <div class="flex items-center space-x-4">
                <p class="cursor-pointer">Search</p>
                <p class="cursor-pointer"><a href="/login">Hello, sign in</a></p>
                <div class="flex items-center space-x-4">
                    <p class="cursor-pointer"><a href="/profile">Account</a></p>
                    <p class="cursor-pointer">Orders</p>
                    <p class="cursor-pointer">Cart</p>
                <p class="cursor-pointer">Eng/Lv</p>                    
                </div>
            </div>
        </div>
    </div>

    <main class="container mx-auto mt-4">
        @yield('content')
    </main>

    <footer class="bg-gray-200 p-4 text-center">
        <p>Contact Us</p>
    </footer>

</body>
</html>