@extends('layouts.app')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
            {{ session('success') }}
            </div>
        @endif

        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal" style="margin-top:50px;margin-bottom:50px;">
            {{ __('default.menu.restaurants') }}
            </h5>
            <h1 class="mb-5">{{ __('default.menu.restaurants') }} {{ __('default.global.detail') }}</h1>
        </div>

        <!-- Restaurant Details -->
        <div class="restaurant-details centered-restaurant-details">
            <img src="{{ asset('img/' . $restaurant->image) }}" 
                    alt="{{ $restaurant->name }}" 
                    class="img-fluid mb-4" 
                    style="max-width: 100%; height: auto;">

            <h2>{{ $restaurant->name }}</h2>
            <p><strong>{{ __('default.global.location') }}:</strong> {{ $restaurant->location }}</p>

            <p><strong>{{ __('default.global.rating') }}:</strong> {{ number_format($restaurant->rating, 1) }} / 5</p>

            <p><strong>{{ __('default.global.description') }}:</strong> {{ $restaurant->description ?? 'No description available' }}</p>

            <div class="mt-4">
                <h3>Chefs at this restaurant:</h3>
                <ul>
                    @foreach ($restaurant->chefs as $chef)
                        <li>
                            <a href="">{{ $chef->name }}</a> - {{ __('default.global.specialty') }}: {{ $chef->specialty }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection