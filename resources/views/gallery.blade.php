@extends('layouts.app')

@section('content')
    <x-navbar />

    <main>
        
        <x-gallery-section :categories="$categories" :images="$images" />
    </main>

    <x-footer />
@endsection