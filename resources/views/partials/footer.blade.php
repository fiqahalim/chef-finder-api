<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-8">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">{{ __('default.menu.small-title') }}</h4>
                <a class="btn btn-link" href="{{ route('about') }}">{{ __('default.global.about-us') }}</a>
                <a class="btn btn-link" href="{{ route('contact-us') }}">{{ __('default.global.contact-us') }}</a>
                <a class="btn btn-link" href="{{ route('reservation.form', $restaurant->id) }}">{{ __('default.menu.reservations') }}</a>
            </div>

            <div class="col-lg-4 col-md-8">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">
                    {{ __('default.global.contact') }}
                </h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@cheffinder.co</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-8">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">
                    {{ __('default.global.opening') }}
                </h4>
                <h5 class="text-light fw-normal">{{ __('default.footer.weekday') }}</h5>
                <p>{{ __('default.footer.weekday-time') }}</p>
                <h5 class="text-light fw-normal">{{ __('default.footer.weekend') }}</h5>
                <p>{{ __('default.footer.weekend-time') }}</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; {{ now()->year }} <a class="border-bottom" href="#">{{ __('default.menu.title') }}</a>. {{ __('default.footer.reserved') }}. 
                    {{ __('default.footer.developer') }}
                </div>
            </div>
        </div>
    </div>
</div>