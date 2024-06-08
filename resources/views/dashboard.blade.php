@extends('layouts.app')

@section('content')
<div class="mx-36">
    @include('components.dashboard.search', ['cities' => $cities])
<h2 class="text-2xl font-bold mt-6">Available Flights</h2>
@if(count($data) < 1)
    <div class="p-6 mt-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">No available flights, please check again later.</h5>
    </div>
@endif
@foreach ($data as $item)
@include('components.dashboard.ticket', ["data" => $item])
@endforeach
</div>

@endsection