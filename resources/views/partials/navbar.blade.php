<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top px-4 px-lg-5 py-3 py-lg-0">
        <div class="container">
            <a class="navbar-brand text-gold fw-bold" href="{{ route('home') }}">
                <img src="../img/logo.png" alt="Logo">
                {{ __('default.menu.title') }}
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <ul class="navbar-nav ms-auto py-0 pe-4">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('home') }}">{{ __('default.menu.home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('chef.index') }}">{{ __('default.menu.chefs') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('restaurant.index') }}">{{ __('default.menu.restaurants') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('chef.interview') }}">{{ __('default.menu.interviews') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('reservation.form', $restaurant->id) }}">{{ __('default.menu.reservations') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @if(Route::currentRouteName() === 'home')
        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container my-5 py-5">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h2 class="display-3 text-white animated slideInLeft">Enjoy Delicious Meal by<br>The Best Chefs</h1>
                        <p class="text-white animated slideInLeft mb-4 pb-2">
                            Indulge in a culinary experience like no other, where every dish is expertly crafted by world-class chefs.
                            From the freshest ingredients to masterful presentation, each meal promises to tantalize your taste buds
                            and leave you craving more. Whether you're celebrating a special occasion or simply enjoying a night out,
                            our chefs ensure an unforgettable dining experience.
                        </p>
                        <a href="{{ route('reservation.form', $restaurant->id) }}" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft" id="reserveBtn">
                            {{ __('default.reservation.booked') }}
                        </a>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                        <img class="img-fluid" src="img/hero.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
