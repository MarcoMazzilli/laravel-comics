@php
    $movies = config('dc-comics')
@endphp
@extends('layout.main')

@section('content')

    <div class="main-wrapper movies">
        <div class="container">

            @foreach ($movies as $movie )

            <div class="card">
                <div class="card-img">
                    <img src="{{ $movie['thumb'] }}" alt="text">
                </div>
                <div class="card-description">
                    <span>{{ $movie['title'] }}</span>
                </div>
            </div>

            @endforeach

        </div>
    </div>

@endsection
