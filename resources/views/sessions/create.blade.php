@extends('layout')

@section('content')
    <div class="max-w-md mx-auto my-8">
        <main>
            <form method="POST" action="/login" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input  type="email"
                            name="email"
                            id="email"
                            value="{{ old('email') }}"
                            required
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    >

                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input  type="password"
                            name="password"
                            id="password"
                            required
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    >

                    @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit -->
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Login
                    </button>

                    <a href="/register" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                        Register new account
                    </a>
                </div>
            </form>
        </main>
    </div>
@endsection
