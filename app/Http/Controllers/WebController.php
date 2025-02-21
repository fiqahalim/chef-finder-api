<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Chef;
use App\Models\Reservation;

class WebController extends Controller
{
    // Show the home page
    public function home() {
        $restaurants = Restaurant::all();
        return view('home', compact('restaurants'));
    }

    // Show a restaurant's details
    public function showRestaurant($id) {
        $restaurant = Restaurant::findOrFail($id);
        return view('restaurant.show', compact('restaurant'));
    }

    // Show a chef's details
    public function showChef($id) {
        $chef = Chef::findOrFail($id);
        return view('chef.show', compact('chef'));
    }

    // Show reservation form
    public function showReservationForm($restaurantId) {
        return view('reservation.form', compact('restaurantId'));
    }

    // Handle reservation request
    public function makeReservation(Request $request) {
        $request->validate([
            'restaurant_id' => 'required|exists:restaurants,id',
            'user_id' => 'required|exists:users,id',
            'reservation_date' => 'required|date',
            'guests' => 'required|integer|min:1',
        ]);

        Reservation::create($request->all());

        return redirect()->route('home')->with('success', 'Reservation made successfully!');
    }
}
