@extends('layouts.app')

@section('content')
@foreach ($data as $item)
@include('components.dashboard.ticket', ["data" => $item])
@endforeach
@endsection