@extends('layout.main')

@section('content')

    <div class="main-wrapper description">

        <div class="container">
        <div class="mm-card">

            <div class="left-img">
                <img src="{{ $movie['thumb'] }}" alt="non la trovo?">
            </div>

            <div class="right-description">
                <h1>{{ $movie['title'] }}</h1>
                <h3>{{ $movie['series'] }}</h3>
                <p id="description">{{ $movie['description'] }}</p>

                <a class="button" href="{{ route('movies') }}">Back to Home</a>
            </div>

        </div>
        </div>

    </div>

@endsection
