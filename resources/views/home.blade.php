@extends('layouts.app')

@section('content')

<div class="container-xxl bg-white p-0">
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
</div>

<div class="hero-section text-center text-light py-5">
    <h1 class="display-4 text-gold fw-bold">Find the Best Chefs</h1>
    <p class="lead">Discover where top chefs are working and book a reservation now.</p>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('images/restaurant.jpg') }}" class="img-fluid rounded" alt="Restaurant">
        </div>
        <div class="col-md-6">
            <h2 class="text-gold">Why Choose Us?</h2>
            <p>We help food lovers find the best chefs and their current restaurants.</p>
        </div>
    </div>
</div>
@endsection
