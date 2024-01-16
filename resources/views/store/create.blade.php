@extends('layout')

@section('content')
    <div class="max-w-md mx-auto my-8">
        <main>
            <form method="POST" action="add-store" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf

                <!-- Store Name -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Store Name</label>
                    <input  type="text"
                            name="name"
                            id="name"
                            value="{{ old('name') }}"
                            required
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    >

                    @error('store_name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Location -->
                <div class="mb-4">
                    <label for="location" class="block text-gray-700 text-sm font-bold mb-2">Location</label>
                    <input  type="text"
                            name="location"
                            id="location"
                            value="{{ old('location') }}"
                            required
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    >

                    @error('location')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Work Hours -->
                <div class="mb-4">
                    <label for="work_hours" class="block text-gray-700 text-sm font-bold mb-2">Work Hours</label>
                    <input  type="text"
                            name="work_hours"
                            id="work_hours"
                            value="{{ old('work_hours') }}"
                            required
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    >

                    @error('work_hours')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit -->
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Create Store
                    </button>

                    <a href="/dashboard" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                        Back to Dashboard
                    </a>
                </div>
            </form>
        </main>
    </div>
@endsection
