@extends('layouts.app')

@section('content')
<div class="container-xxl bg-white p-0">
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">{{ __('default.menu.loading') }}</span>
        </div>
    </div>
</div>

{{-- Services --}}
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                        <h5>Master Chefs</h5>
                        <p>Master chefs create exceptional dishes in top restaurants.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                        <h5>Quality Food</h5>
                        <p>Exceptional dishes, crafted to perfection.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                        <h5>Online Reservation</h5>
                        <p>Book your table easily online anytime</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                        <h5>24/7 Service</h5>
                        <p>Enjoy our services round the clock, always</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- About Us --}}
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">{{ __('default.global.about-us') }}</h5>
                <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>{{ __('default.menu.small-title') }}</h1>
                <p class="mb-4">Chef Finders connects you with the best chefs and their amazing dishes.</p>
                <p class="mb-4">Discover top culinary talent, find where they’re cooking, and enjoy unforgettable meals crafted just for you.</p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                            <div class="ps-4">
                                <p class="mb-0">Years of</p>
                                <h6 class="text-uppercase mb-0">Experience</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                            <div class="ps-4">
                                <p class="mb-0">{{ __('default.global.popular') }}</p>
                                <h6 class="text-uppercase mb-0">{{ __('default.global.master-chefs') }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('about') }}">{{ __('default.global.read-more') }}</a>
            </div>
        </div>
    </div>
</div>

{{-- Testimonial --}}
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">{{ __('default.global.testimonial') }}</h5>
            <h1 class="mb-5">Our Clients Say!!!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>A truly unforgettable dining experience I ever had!</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width:50px;height:50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Sarah Williams</h5>
                        <small>Event Planner</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>The best food I've had in years, simply amazing!</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width:50px;height:50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">John Doe</h5>
                        <small>Architect</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Exceptional service and delicious meals every time!</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width:50px;height:50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Frank Harris</h5>
                        <small>Marketing Manager</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Outstanding flavors and a cozy atmosphere, loved it!</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width:50px;height:50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Michelle Lee</h5>
                        <small>Software Developer</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
