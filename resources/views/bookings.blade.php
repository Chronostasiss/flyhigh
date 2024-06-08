@extends('layouts.app')

@section('content')
@if(count($data) < 1)
  
<div class="flex justify-center w-full mt-12">
  <div class="w-[70vw] p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">You currently do not have any bookings.</h5>
      <a href="{{route('dashboard')}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Book Now
        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
    </a>
  </div>
</div>

@endif
@foreach ($data as $item)
  <?php
    $ticket_data = $item->ticket()->get();
  ?>
  @include('components.bookings.mybookings', ["data" => $ticket_data[0], "booking_id" => $item->id, "name" => $item->name])
@endforeach
  
@endsection
