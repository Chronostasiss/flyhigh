@extends('layouts.app')

@section('content')

    
<div class="m-5 h-[50vh]">
    <div class="group mx-2 mt-10 grid max-w-screen-md grid-cols-12 space-x-8 overflow-hidden rounded-lg border py-8 text-gray-700 shadow transition hover:shadow-lg sm:mx-auto">
      <a href="#" class="order-2 col-span-1 mt-4 -ml-14 text-left text-gray-600 hover:text-gray-700 sm:-order-1 sm:ml-4">
        <div class="group relative h-16 w-16 overflow-hidden rounded-lg">
          <img src="{{ $data['img_link'] }}" alt="airline_logo" class="h-full w-full object-cover text-gray-700" style="opacity: 1; transform-origin: 0% 50% 0px; transform: none;" />
        </div>
      </a>
      <div class="col-span-11 flex flex-col pr-8 text-left sm:pl-4">
        {{-- <h3 class="text-sm text-gray-600"></h3> --}}
        <a href="#" class="mb-3 overflow-hidden pr-7 text-lg font-semibold sm:text-xl">Flight Itinerary</a>
        <h3 class="text-sm text-gray-600">{{ $data['airline_name'] }}</h3>
        <p class="text-xs text-gray-500">{{ $data['flight_code'] }}</p>
        <div class="text-xs text-gray-500">{{ $data['baggage'] }}</div>
        <p class="overflow-hidden pr-7 text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
  
        <div class="mt-5 flex flex-col space-y-3 text-sm font-medium text-gray-500 sm:flex-row sm:items-center sm:space-y-0 sm:space-x-2">
            <div class="font-bold">
            Departure
                <p>{{ $departureTime }}</p>
                <span class="ml-2 mr-3 rounded-full px-2 py-0.5">
                {{ $data['departure_city'] }}</span>
                <p>{{ $data['departure_country'] }}</p>
            </div>

            <div class="font-bold">
                <p>{{ $arrivalTime }}</p>
                Arrival
                <span class="ml-2 mr-3 rounded-full px-2 py-0.5">
                    {{ $data['arrival_city'] }}</span>
                <p>{{ $data['arrival_country'] }}</p>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
