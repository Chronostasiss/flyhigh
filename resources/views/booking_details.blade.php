@extends('layouts.app')

@section('content')
<a href="{{ route('bookings') }}">
    <button class="text-white ml-36 mt-6 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Back to Bookings</button>
</a>
<div class="mx-36 mt-4 mb-24">
    <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Flight Details</h5>
        @php
            use Carbon\Carbon;
            $departureTime = Carbon::parse($flight_details[0]->departure_time)->format('H:i');
            $arrivalTime = Carbon::parse($flight_details[0]->arrival_time)->format('H:i');
            $departureDate = Carbon::parse($flight_details[0]->departure_time)->format('l d M');
        @endphp
      <div class="pb-10 pt-2">
              <div class="flex flex-row items-baseline flex-nowrap bg-gray-100 p-2 rounded-tr-xl rounded-tl-xl">
                  <svg viewBox="0 0 64 64" data-testid="tripDetails-bound-plane-icon" pointer-events="all" aria-hidden="true" class="mt-2 mr-1" role="presentation" style="fill: rgb(102, 102, 102); height: 0.9rem; width: 0.9rem;">
                      <path d="M43.389 38.269L29.222 61.34a1.152 1.152 0 01-1.064.615H20.99a1.219 1.219 0 01-1.007-.5 1.324 1.324 0 01-.2-1.149L26.2 38.27H11.7l-3.947 6.919a1.209 1.209 0 01-1.092.644H1.285a1.234 1.234 0 01-.895-.392l-.057-.056a1.427 1.427 0 01-.308-1.036L1.789 32 .025 19.656a1.182 1.182 0 01.281-1.009 1.356 1.356 0 01.951-.448l5.4-.027a1.227 1.227 0 01.9.391.85.85 0 01.2.252L11.7 25.73h14.5L19.792 3.7a1.324 1.324 0 01-.2-1.149A1.219 1.219 0 0121 2.045h7.168a1.152 1.152 0 011.064.615l14.162 23.071h8.959a17.287 17.287 0 017.839 1.791Q63.777 29.315 64 32q-.224 2.685-3.807 4.478a17.282 17.282 0 01-7.84 1.793h-9.016z"></path>
                  </svg>
                  <h1 class="ml-2 uppercase font-bold text-gray-500">departure</h1>
                  <p class="ml-2 font-normal text-gray-500">{{ $departureDate }}</p>
              </div>
              <div class="mt-2 flex justify-start bg-white p-2">
                  <div class="flex mx-2 ml-6 h8 px-2 flex-row items-baseline rounded-full bg-gray-100 p-1">
                      <svg viewBox="0 0 64 64" pointer-events="all" aria-hidden="true" class="etiIcon css-jbc4oa" role="presentation" style="fill: rgb(102, 102, 102); height: 12px; width: 12px;">
                          <path d="M43.389 38.269L29.222 61.34a1.152 1.152 0 01-1.064.615H20.99a1.219 1.219 0 01-1.007-.5 1.324 1.324 0 01-.2-1.149L26.2 38.27H11.7l-3.947 6.919a1.209 1.209 0 01-1.092.644H1.285a1.234 1.234 0 01-.895-.392l-.057-.056a1.427 1.427 0 01-.308-1.036L1.789 32 .025 19.656a1.182 1.182 0 01.281-1.009 1.356 1.356 0 01.951-.448l5.4-.027a1.227 1.227 0 01.9.391.85.85 0 01.2.252L11.7 25.73h14.5L19.792 3.7a1.324 1.324 0 01-.2-1.149A1.219 1.219 0 0121 2.045h7.168a1.152 1.152 0 011.064.615l14.162 23.071h8.959a17.287 17.287 0 017.839 1.791Q63.777 29.315 64 32q-.224 2.685-3.807 4.478a17.282 17.282 0 01-7.84 1.793h-9.016z"></path>
                      </svg>
                      <p class="font-normal text-sm ml-1 text-gray-500">{{ $flight_details[0]['flight_type'] }}</p>
                  </div>
              </div>
              <div class="mt-2 flex sm:flex-row mx-6 sm:justify-between flex-wrap ">
                  <div class="flex flex-row place-items-center p-2 w-1/3">
                      <img alt="airline_logo" class="w-10 h-auto" src="{{ $flight_details[0]['img_link'] }}" style="opacity: 1; transform-origin: 0% 50% 0px; transform: none;" />
                      <div class="flex flex-col ml-2">
                          <p class="text-xs text-gray-500 font-bold">{{ $flight_details[0]['airline_name'] }}</p>
                          <p class="text-xs text-gray-500">{{ $flight_details[0]['flight_code'] }}</p>
                          <div class="text-xs text-gray-500">{{ $flight_details[0]['baggage'] }}</div>
                      </div>
                  </div>
          
                  <div class="flex flex-col p-2 w-1/3">
                      <p class="font-bold">{{ $departureTime }}</p>
                      <p class="text-gray-500"><span class="font-bold">{{ $flight_details[0]['departure_city'] }}</span> ({{ $flight_details[0]['departure_city_code'] }})</p>
                      <p class="text-gray-500">{{ $flight_details[0]['departure_country'] }}</p>
                  </div>
                  <div class="flex flex-col flex-wrap p-2 w-1/3">
                      <p class="font-bold">{{ $arrivalTime }}</p>
                      <p class="text-gray-500"><span class="font-bold">{{ $flight_details[0]['arrival_city'] }}</span> ({{ $flight_details[0]['arrival_city_code'] }})</p>
                      <p class="text-gray-500">{{ $flight_details[0]['arrival_country'] }}</p>
                  </div>
              </div>
              <div class="mt-4 bg-gray-100 flex flex-row flex-wrap md:flex-nowrap justify-start items-baseline rounded-bl-xl rounded-br-xl">
                  <div class="flex mx-6 py-4 flex-row flex-wrap">
                      <svg class="w-12 h-10 p-2 mx-2 self-center bg-gray-400 rounded-full fill-current text-white" viewBox="0 0 64 64" pointer-events="all" aria-hidden="true" role="presentation"><path d="M43.389 38.269L29.222 61.34a1.152 1.152 0 01-1.064.615H20.99a1.219 1.219 0 01-1.007-.5 1.324 1.324 0 01-.2-1.149L26.2 38.27H11.7l-3.947 6.919a1.209 1.209 0 01-1.092.644H1.285a1.234 1.234 0 01-.895-.392l-.057-.056a1.427 1.427 0 01-.308-1.036L1.789 32 .025 19.656a1.182 1.182 0 01.281-1.009 1.356 1.356 0 01.951-.448l5.4-.027a1.227 1.227 0 01.9.391.85.85 0 01.2.252L11.7 25.73h14.5L19.792 3.7a1.324 1.324 0 01-.2-1.149A1.219 1.219 0 0121 2.045h7.168a1.152 1.152 0 011.064.615l14.162 23.071h8.959a17.287 17.287 0 017.839 1.791Q63.777 29.315 64 32q-.224 2.685-3.807 4.478a17.282 17.282 0 01-7.84 1.793h-9.016z"></path></svg>
                      <div class="text-sm mx-2 flex flex-col">
                          <p class="">Standard Ticket</p>
                          <p class="font-bold">${{ $flight_details[0]['price'] }}</p>
                          <p class="text-xs text-gray-500">Price per adult</p>
                      </div>
                  </div>
              </div>
          </div>
        
        <div class="flex items-center">

            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Traveler Details</h5> 
            <button class="ml-2" type="button" data-modal-target="traveler_edit" data-modal-toggle="traveler_edit" >
                <svg class="w-7 h-7 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                </svg>
            </button>
        </div>
        <div class="flex">
            <div class="mt-4 w-1/2 pr-4">
                <label class="block text-sm font-medium text-gray-700">Name</label>
                <input value="{{$traveler_details->title . " " . $traveler_details->name}}" disabled type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <div class="mt-4 w-1/2 pl-4">
                <label class="block text-sm font-medium text-gray-700">Contact Number</label>
                <input value="{{$traveler_details->phone}}" disabled type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
        </div>
        <div class="flex">
            <div class="mt-4 w-1/2 pr-4">
                <label class="block text-sm font-medium text-gray-700">Date of Birth</label>
                <input value="{{$traveler_details->date_of_birth}}" disabled type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <div class="mt-4 w-1/2 pl-4">
                <label class="block text-sm font-medium text-gray-700">Nationality</label>
                <input value="{{$traveler_details->nationality}}" disabled type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
        </div>
        <div class="mt-12">
            <form action="{{route('reschedule', ['id' => $traveler_details->id])}}" method="GET">
                <button type="submit" class="bg-blue-500 w-full text-white px-4 py-2 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Reschedule</button>
            </form>
        </div>
        <div class="mt-2">
            <button type="button" data-modal-target="default-modal" data-modal-toggle="default-modal" class="bg-red-700 w-full text-white px-4 py-2 rounded-md shadow-sm hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Cancel</button>
        </div>
    </div>
</div>


{{-- Confirm Modal --}}
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Are you sure you want to cancel your booking?
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Return</button>
                <form action="{{route('delete_booking', ['id' => $traveler_details->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button data-modal-hide="default-modal" type="submit" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Edit Details Modal --}}
<div id="traveler_edit" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Edit Traveler Details
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="traveler_edit">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="{{route("edit_booking", ["id" => $traveler_details->id])}}" method="post">
            <div class="p-4 md:p-5 space-y-4">
                    @csrf
                    @method('PUT')
                    <div class="">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <select selected="{{$traveler_details->title}}" name="title" id="title" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                            <option value="Mr.">Mr.</option>
                            <option value="Mrs.">Mrs.</option>
                            <option value="Ms.">Ms.</option>
                        </select>
                    </div>
                    <div class="mt-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input value="{{$traveler_details->name}}" type="text" autocomplete="name" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>
                    <div class="mt-4">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                        <input value="{{$traveler_details->phone}}" type="text" autocomplete="phone" id="phone" name="phone" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>
                    <div class="mt-4">
                        <label for="date_of_birth" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                        <input value="{{$traveler_details->date_of_birth}}" type="date" required autocomplete="bday" name="date_of_birth" id="date_of_birth" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    <div class="mt-4">
                        <label for="nationality" class="block text-sm font-medium text-gray-700">Nationality</label>
                        <input value="{{$traveler_details->nationality}}" type="text" autocomplete="country-name" name="nationality" id="nationality" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>
                
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="traveler_edit" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                <button data-modal-hide="traveler_edit" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection