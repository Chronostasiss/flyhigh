<?php
  use Carbon\Carbon;
  $departureTime = Carbon::parse($data->departure_time)->format('H:i');
  $arrivalTime = Carbon::parse($data->arrival_time)->format('H:i');
  $departureDate = Carbon::parse($data->departure_time)->format('l d M');
?>
<div class="p-10">
    <div class="max-w-full  bg-white flex flex-col rounded overflow-hidden shadow-lg">
      <div class="flex flex-row items-baseline flex-nowrap bg-gray-100 p-2">
        <svg viewBox="0 0 64 64" data-testid="tripDetails-bound-plane-icon" pointer-events="all" aria-hidden="true" class="mt-2 mr-1" role="presentation" style="fill: rgb(102, 102, 102); height: 0.9rem; width: 0.9rem;">
          <path d="M43.389 38.269L29.222 61.34a1.152 1.152 0 01-1.064.615H20.99a1.219 1.219 0 01-1.007-.5 1.324 1.324 0 01-.2-1.149L26.2 38.27H11.7l-3.947 6.919a1.209 1.209 0 01-1.092.644H1.285a1.234 1.234 0 01-.895-.392l-.057-.056a1.427 1.427 0 01-.308-1.036L1.789 32 .025 19.656a1.182 1.182 0 01.281-1.009 1.356 1.356 0 01.951-.448l5.4-.027a1.227 1.227 0 01.9.391.85.85 0 01.2.252L11.7 25.73h14.5L19.792 3.7a1.324 1.324 0 01.2-1.149A1.219 1.219 0 0121 2.045h7.168a1.152 1.152 0 011.064.615l14.162 23.071h8.959a17.287 17.287 0 017.839 1.791Q63.777 29.315 64 32q-.224 2.685-3.807 4.478a17.282 17.282 0 01-7.84 1.793h-9.016z"></path>
        </svg>
        <h1 class="ml-2 uppercase font-bold text-gray-500">departure</h1>
        <p class="ml-2 font-normal text-gray-500">{{$departureDate}}</p>
      </div>
      <div class="mt-2 flex justify-start bg-white p-2">
        <div class="flex mx-2 ml-6 h8 px-2 flex-row items-baseline rounded-full bg-gray-100 p-1">
          <svg viewBox="0 0 64 64" pointer-events="all" aria-hidden="true" class="etiIcon css-jbc4oa" role="presentation" style="fill: rgb(102, 102, 102); height: 12px; width: 12px;">
            <path d="M43.389 38.269L29.222 61.34a1.152 1.152 0 01-1.064.615H20.99a1.219 1.219 0 01-1.007-.5 1.324 1.324 0 01-.2-1.149L26.2 38.27H11.7l-3.947 6.919a1.209 1.209 0 01-1.092.644H1.285a1.234 1.234 0 01-.895-.392l-.057-.056a1.427 1.427 0 01-.308-1.036L1.789 32 .025 19.656a1.182 1.182 0 01.281-1.009 1.356 1.356 0 01.951-.448l5.4-.027a1.227 1.227 0 01.9.391.85.85 0 01.2.252L11.7 25.73h14.5L19.792 3.7a1.324 1.324 0 01.2-1.149A1.219 1.219 0 0121 2.045h7.168a1.152 1.152 0 011.064.615l14.162 23.071h8.959a17.287 17.287 0 017.839 1.791Q63.777 29.315 64 32q-.224 2.685-3.807 4.478a17.282 17.282 0 01-7.84 1.793h-9.016z"></path>
          </svg>
          <p class="font-normal text-sm ml-1 text-gray-500">{{$data['flight_type']}}</p>
        </div>
      </div>
      <div class="mt-2 flex sm:flex-row mx-6 sm:justify-between flex-wrap ">
        <div class="flex flex-row place-items-center p-2 w-1/3">
          <img alt="airline_logo" class="w-10 h-auto" src="{{$data['img_link']}}" style="opacity: 1; transform-origin: 0% 50% 0px; transform: none;" />
          <div class="flex flex-col ml-2">
            <p class="text-xs text-gray-500 font-bold">{{$data['airline_name']}}</p>
            <p class="text-xs text-gray-500">{{$data['flight_code']}}</p>
            <div class="text-xs text-gray-500">{{$data['baggage']}}</div>
          </div>
        </div>
  
        <div class="flex flex-col p-2 w-1/3">
          <p class="font-bold">{{$departureTime}}</p>
          <p class="text-gray-500"><span class="font-bold">{{$data['departure_city_code']}}</span> {{$data['departure_city']}}</p>
          <p class="text-gray-500">{{$data['departure_country']}}</p>
        </div>
        <div class="flex flex-col flex-wrap p-2 w-1/3">
          <p class="font-bold">{{$arrivalTime}}</p>
          <p class="text-gray-500"><span class="font-bold">{{$data['arrival_city_code']}}</span> {{$data['arrival_city']}}</p>
          <p class="text-gray-500">{{$data['arrival_country']}}</p>
        </div>
      </div>
      <div class="mt-4 bg-gray-100 flex flex-row flex-wrap md:flex-nowrap justify-start items-baseline">
        <div class="flex mx-6 py-4 flex-row flex-wrap">
          <svg class="w-12 h-10 p-2 mx-2 self-center bg-gray-400 rounded-full fill-current text-white" viewBox="0 0 64 64" pointer-events="all" aria-hidden="true" role="presentation"><path d="M43.389 38.269L29.222 61.34a1.152 1.152 0 01-1.064.615H20.99a1.219 1.219 0 01-1.007-.5 1.324 1.324 0 01-.2-1.149L26.2 38.27H11.7l-3.947 6.919a1.209 1.209 0 01-1.092.644H1.285a1.234 1.234 0 01-.895-.392l-.057-.056a1.427 1.427 0 01-.308-1.036L1.789 32 .025 19.656a1.182 1.182 0 01.281-1.009 1.356 1.356 0 01.951-.448l5.4-.027a1.227 1.227 0 01.9.391.85.85 0 01.2.252L11.7 25.73h14.5L19.792 3.7a1.324 1.324 0 01.2-1.149A1.219 1.219 0 0121 2.045h7.168a1.152 1.152 0 011.064.615l14.162 23.071h8.959a17.287 17.287 0 017.839 1.791Q63.777 29.315 64 32q-.224 2.685-3.807 4.478a17.282 17.282 0 01-7.84 1.793h-9.016z"></path></svg>
          <div class="text-sm mx-2 flex flex-col">
            <p class="">Standard Ticket</p>
            <p class="font-bold">${{$data['price']}}</p>
            <p class="text-xs text-gray-500">Price per adult</p>
          </div>
          <button class="w-32 h-11 rounded flex border-solid border bg-white mx-2 justify-center place-items-center"><div class="">Book</div></button>
        </div>
      </div>
    </div>
</div>