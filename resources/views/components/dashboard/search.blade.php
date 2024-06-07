<div class="container mx-auto px-11">
    <h1 class="text-2xl font-bold mb-6 my-6">Find Your Flight</h1>
    <div class="bg-white p-6 rounded-lg shadow-md">
        <form action="{{ route('tickets.search') }}" method="POST" class="space-y-4">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div>
                    <label for="from" class="block text-sm font-medium text-gray-700">From</label>
                    <select name="from" id="from" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <option value="">Select Departure City</option>
                        @foreach($cities as $city)
                            <option value="{{ $city['city'] }}">{{ $city['city'] }} ({{ $city['code'] }})</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="to" class="block text-sm font-medium text-gray-700">To</label>
                    <select name="to" id="to" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <option value="">Select Arrival City</option>
                        @foreach($cities as $city)
                            <option value="{{ $city['city'] }}">{{ $city['city'] }} ({{ $city['code'] }})</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="departure_date" class="block text-sm font-medium text-gray-700">Departure Date</label>
                    <input type="date" name="departure_date" id="departure_date" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Search</button>
            </div>
        </form>
    </div>
</div>
