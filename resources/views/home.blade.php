@extends('layouts.app')

@section('content')
    <x-navbar />

    <main>
        <x-hero-section />
        <x-gallery-section :categories="$categories" :images="$images" />
        <x-events-section />

    </main>

    <x-footer />
@endsection