@extends('layouts.app')

@section('content')
<div class="container-xxl py-5 px-0 wow fadeInUp">
    <div class="container">
        <div class="row g-0" style="margin-top:50px;margin-bottom:50px;">
            <div class="col-md-6">
                <div class="video">
                    <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>

            <div class="col-md-6 bg-dark d-flex align-items-center">
                <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">
                        {{ __('default.menu.reservations') }}
                    </h5>
                    <h1 class="text-white mb-4">Book A Table Online</h1>
                    
                    <!-- Reservation Form -->
                    <form action="{{ route('reservation.save') }}" method="POST">
                        @csrf

                        <div class="row g-3">
                            <div class="form-group">
                                <label for="restaurant_id">Choose a Restaurant</label>
                                <select class="form-control" id="restaurant_id" name="restaurant_id" required>
                                    <option value="">Select a Restaurant</option>
                                    @foreach($restaurants as $restaurant)
                                        <option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="name">{{ __('default.global.name') }}</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('default.global.email') }}</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                            </div>

                            <!-- Date Input -->
                            <div class="form-group">
                                <label for="date">{{ __('default.reservation.reserve-date') }}</label>
                                <input type="date" class="form-control" id="reservation_date" name="reservation_date" required>
                            </div>

                            <!-- Number of Guests Input -->
                            <div class="form-group">
                                <label for="guests">{{ __('default.reservation.guest') }}</label>
                                <input type="number" class="form-control" id="guests" name="guests" min="1" required>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100 py-3">{{ __('default.reservation.confirm') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection