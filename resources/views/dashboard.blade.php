@extends('layouts.app')

@section('content')
<div class="mx-36">
    @include('components.dashboard.search', ['cities' => $cities])
<h2 class="text-2xl font-bold mt-6">Available Flights</h2>
@foreach ($data as $item)
@include('components.dashboard.ticket', ["data" => $item])
@endforeach
</div>

@endsection