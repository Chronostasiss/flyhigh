@extends('layouts.app')

@section('content')
    <a href="{{ url()->previous() }}">
        <button class="text-white ml-36 mt-12 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Back to Details</button>
    </a>
    <div class="mx-36">
        <h2 class="text-2xl font-bold mt-6">Available Flights</h2>
        @if(count($data) < 1)
  
        <div class="p-6 mt-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">No available flights for reschedule.</h5>
        </div>

        @endif
        @foreach ($data as $item)
        @include('components.reschedule.ticket', ["data" => $item, "booking_id" => $booking_id])
        @endforeach
    </div>
@endsection