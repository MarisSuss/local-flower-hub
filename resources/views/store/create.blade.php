@extends('layout')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

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

                    @error('name')
                        <p class="text-red-500 text-xs mt-2">Store with name {{ old('name') }} already exists.</p>
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

                <!-- Work Hours for Each Day -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Work Hours (Per Day)</label>
                    
                    @for ($day = 1; $day <= 7; $day++)
                        <div class="mb-2">
                            <label for="work_start_time_day_{{ $day }}" class="text-gray-600">{{ ucfirst(\Carbon\Carbon::now()->startOfWeek()->addDays($day - 1)->format('l')) }}</label>
                            <div class="flex">
                                <input type="text"
                                    name="work_start_time_day_{{ $day }}"
                                    id="work_start_time_day_{{ $day }}"
                                    value="{{ old('work_start_time_day_' . $day) }}"
                                    placeholder="Start Time"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                >
                                <span class="mx-2">to</span>
                                <input type="text"
                                    name="work_end_time_day_{{ $day }}"
                                    id="work_end_time_day_{{ $day }}"
                                    value="{{ old('work_end_time_day_' . $day) }}"
                                    placeholder="End Time"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                >
                            </div>
                        </div>
                    @endfor

                    <small class="text-gray-600">Please enter work hours in the format: HH:MM AM/PM</small>
                </div>

                <!-- Initialize Flatpickr for the work hours input -->
                <script>
                    // Initialize Flatpickr for each day's start and end times
                    for (let day = 1; day <= 7; day++) {
                        flatpickr(`#work_start_time_day_${day}`, {
                            enableTime: true,
                            noCalendar: true,
                            dateFormat: "h:i K",
                            time_24hr: false
                        });

                        flatpickr(`#work_end_time_day_${day}`, {
                            enableTime: true,
                            noCalendar: true,
                            dateFormat: "h:i K",
                            time_24hr: false
                        });
                    }
                </script>

                <!-- Submit -->
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Create Store
                    </button>

                    <a href="/" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                        Back
                    </a>
                </div>
            </form>
        </main>
    </div>
@endsection
