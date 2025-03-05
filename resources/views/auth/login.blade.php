@extends('layouts.app')

@section('content')
<div class="container-xxl py-5 px-0 wow fadeInUp">
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <!-- Login Wrapper -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card shadow-sm border-0">
                <!-- Card Header -->
                <div class="card-header text-center bg-primary text-white py-4">
                    <h3 class="m-0">Login</h3>
                </div>

                <!-- Card Body -->
                <div class="card-body p-4">
                    <form action="{{ url('/login') }}" method="POST">
                        @csrf
                        <!-- Email Field -->
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                        </div>

                        <!-- Password Field -->
                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary w-100 py-2 mt-3">Login</button>
                    </form>

                    <!-- Register Link -->
                    <div class="text-center mt-3">
                        <p class="mb-0">Don't have an account? <a href="{{ route('register') }}" class="text-primary">Register here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
