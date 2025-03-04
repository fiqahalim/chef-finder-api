@extends('layouts.app')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal" style="margin-top:50px;margin-bottom:50px;">
                {{ __('default.global.about-us') }}
            </h5>
        </div>

        <div class="col-lg-12">
            <!-- About Us Content -->
            <p class="mb-4">Welcome to <strong>Chef Finders</strong> – your ultimate guide to discovering the best culinary talent in the world. We connect food enthusiasts with talented chefs and their exceptional dishes, making it easier for you to find unforgettable dining experiences.</p>
            
            <p class="mb-4">At <strong>Chef Finders</strong>, we understand the joy of a great meal and the magic of world-class cooking. Our platform is designed to help you discover top chefs, learn where they’re currently working, and explore the dishes they’re known for. Whether you’re seeking the perfect restaurant or craving a private dining experience, we bring the culinary world to your fingertips.</p>
            
            <p class="mb-4"><strong>Our Mission:</strong> Our mission is simple: to make it easy for people to find and enjoy the finest chefs and their creations. We believe that food is an experience, not just a meal. That’s why we’ve created a space where you can browse through profiles of talented chefs, read about their culinary specialties, and locate where they’re currently cooking, so you never miss out on amazing dining experiences.</p>
            
            <p class="mb-4"><strong>Why Choose Chef Finders?</strong></p>
            <ul>
                <li><strong>Discover Top Talent:</strong> From renowned chefs to rising stars, we connect you with the best in the culinary world.</li>
                <li><strong>Explore Amazing Dishes:</strong> Find out what dishes the chefs are serving and get a taste of their creative menus.</li>
                <li><strong>Stay Updated:</strong> Easily find out where your favorite chefs are working and where they’ll be next.</li>
            </ul>

            <p class="mb-4">In addition to our website, we also offer a <strong>Chef Finder app</strong>, available on both <strong>iOS</strong> and <strong>Android</strong>, so you can access all this information on the go, anytime, anywhere.</p>

            <p class="mb-4">Join us on our culinary journey, and let <strong>Chef Finders</strong> lead you to your next unforgettable meal.</p>

            <!-- Stats -->
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
                            <p class="mb-0">Popular</p>
                            <h6 class="text-uppercase mb-0">Master Chefs</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
