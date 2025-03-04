<?php

use App\Http\Controllers\WebController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home page
Route::get('/', [WebController::class, 'home'])->name('home');

// Contact/About us page
Route::get('/contact-us', [WebController::class, 'contactUs'])->name('contact-us');
Route::get('/about', [WebController::class, 'aboutUs'])->name('about');

// Show restaurant details
Route::get('/restaurants', [WebController::class, 'listRestaurants'])->name('restaurant.index');
Route::get('/restaurant/{id}', [WebController::class, 'showRestaurant'])->name('restaurant.show');

// Show chef details
Route::get('/chefs', [WebController::class, 'listChef'])->name('chef.index');
Route::get('/chef/{id}', [WebController::class, 'showChef'])->name('chef.show');
Route::get('/chef-interview', [WebController::class, 'showInterviews'])->name('chef.interview');

// Reservation form
Route::middleware('auth')->group(function () {
    Route::get('/reserve/{restaurantId}', [WebController::class, 'showReservationForm'])->name('reservation.form');
    Route::post('/reserve', [WebController::class, 'makeReservation'])->name('reservation.make');
});

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
