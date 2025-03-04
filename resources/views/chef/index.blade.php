@extends('layouts.app')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal" style="margin-top:50px;margin-bottom:50px;">
                {{ __('default.menu.chefs') }}
            </h5>
            <h1 class="mb-5">{{ __('default.global.all') }} {{ __('default.menu.chefs') }}</h1>
        </div>

        <div class="row g-4">
            @foreach ($chefs as $chef)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="{{ asset('storage/' . $chef->profile_image) }}" alt="{{ $chef->name }}">
                        </div>
                        <h5 class="mb-0">{{ $chef->name }}</h5>
                        <small>{{ $chef->designation }}</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Add pagination if needed -->
        <div class="d-flex justify-content-center mt-4">
            {{ $chefs->links() }}
        </div>
    </div>
</div>
@endsection