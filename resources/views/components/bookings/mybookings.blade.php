@php
  use Carbon\Carbon;
  $departureTime = Carbon::parse($data->departure_time)->format('H:i');
  $arrivalTime = Carbon::parse($data->arrival_time)->format('H:i');
  $departureDate = Carbon::parse($data->departure_time)->format('l d M');

@endphp
<div class="group mx-2 my-10 grid max-w-screen-md grid-cols-12 space-x-8 overflow-hidden rounded-lg border py-8 text-gray-700 shadow transition hover:shadow-lg sm:mx-auto">
    <div class="w-full flex justify-center pl-3">

        <img alt="airline_logo" class="h-6" src="{{ $data['img_link'] }}" style="opacity: 1; transform-origin: 0% 50% 0px; transform: none;" />
    </div>
    <div class="col-span-11 flex flex-col pr-8 text-left">
    {{-- <h3 class="text-sm text-gray-600"></h3> --}}
    <a href="#" class="mb-3 overflow-hidden pr-7 text-lg font-semibold sm:text-xl">Flight Itinerary</a>
    <div class="flex justify-between">
        <div>
            <h3>{{$name}}</h3>
            <p class="text-xs text-gray-500">{{$data['baggage']}}</p>
        </div>
        <div>
            <h3 class="text-sm text-gray-600">{{$data['airline_name']}}</h3>
            <p class="text-xs text-gray-500">{{$data['flight_code']}}</p>
        </div>
    </div>
    <p class="mt-5 font-semibold">{{$departureDate}}</p>
    <div class="flex justify-between items-end">
        <div class="w-2/3 flex justify-between items-center">
            <div class="flex flex-col items-start space-y-2">
                <div class="font-bold text-gray-700">Departure</div>
                <p class="text-sm">{{$departureTime}}</p>
                <div class="flex items-center">{{$data['departure_city']}}</div>
                <p class="text-sm">{{$data['departure_country']}}</p>
            </div>
            <p class="text-4xl">→</p>
            <div class="flex flex-col items-start space-y-2">
                <div class="font-bold text-gray-700">Arrival</div>
                <p class="text-sm">{{$arrivalTime}}</p>
                <div class="flex items-center">{{$data['arrival_city']}}</div>
                <p class="text-sm">{{$data['arrival_country']}}</p>
            </div>
        </div>
        <form action="{{ route('booking_details', ['id' => $booking_id]) }}" method="get">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Details</button>
        </form>
    </div>
    </div>
</div>
