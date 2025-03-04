@extends('layouts.app')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal" style="margin-top:50px;margin-bottom:50px;">
                {{ __('default.menu.restaurants') }}
            </h5>
            <h1 class="mb-5">{{ __('default.global.all') }} {{ __('default.menu.restaurants') }}</h1>
        </div>

        <!-- Card Layout -->
        <div class="row">
            @foreach($restaurants as $restaurant)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <img src="{{ asset('storage/' . $restaurant->image) }}"
                            class="card-img-top img-fluid custom-img-size" alt="{{ $restaurant->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $restaurant->name }}</h5>
                            <p class="card-text">{{ Str::limit($restaurant->description, 100) }}</p>
                            <a href="{{ route('restaurant.show', $restaurant->id) }}" class="btn btn-primary">{{ __('default.global.read-more') }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="pagination">
            {{ $restaurants->links() }}
        </div>
    </div>
</div>
@endsection