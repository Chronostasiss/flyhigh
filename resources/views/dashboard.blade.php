@extends('layouts.app')

@section('content')
@include('components.dashboard.search', ['cities' => $cities])
<div class="container mx-auto">
    <h2 class="text-xl font-bold mt-6 px-10">Available Flights</h2>
    <div class="space-y-4">
        @foreach ($data as $item)
            @include('components.dashboard.ticket', ["data" => $item])
        @endforeach
    </div>
</div>

@endsection