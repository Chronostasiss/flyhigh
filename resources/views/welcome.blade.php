@extends('layouts.app')

@section('content')
<div>
    
    @include('components.hero.hero')
    @include('components.about.about')
    @include('components.features.features')
    @include('components.about.gallery')
    @include('components.faq.faq')
</div>
@endsection