@extends('layouts.app')

@section('content')
    <x-navbar />

    <main>
        <x-hero-section />
        <x-events-section />
        <x-gallery-section />
    </main>

    <x-footer />
@endsection