@extends('layouts.app')

@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal" style="margin-top:50px;margin-bottom:50px;">
                    {{ __('default.menu.interviews') }}
                </h5>
                <h1 class="mb-5">Interviews with Master Chefs</h1>
            </div>

            <div class="row g-4">
                @foreach ($chefs as $chef)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/' . $chef->profile_image) }}"
                                class="card-img-top img-fluid custom-interview-size" alt="{{ $chef->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $chef->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $chef->specialty }}</h6>

                            @if ($chef->interviews->isNotEmpty())
                                <p class="card-text">{{ Str::limit($chef->interviews->first()->interview_excerpt, 150) }}</p>
                                <a href="#interview-{{ $chef->id }}" class="btn btn-primary" data-bs-toggle="collapse">Read Full Interview</a>
                                <div id="interview-{{ $chef->id }}" class="collapse mt-3">
                                    <h6>How did you get started in the culinary world?</h6>
                                    <p>{{ $chef->interviews->first()->start_story }}</p>
                                    <h6>What was your experience at Michelin-starred restaurants?</h6>
                                    <p>{{ $chef->interviews->first()->michelin_experience }}</p>
                                    <h6>Where have you worked before joining us?</h6>
                                    <p>{{ $chef->interviews->first()->previous_work }}</p>
                                </div>
                            @else
                                <p>{{ __('default.global.not-available') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection