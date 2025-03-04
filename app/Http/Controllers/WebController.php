<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Chef;
use App\Models\Reservation;

class WebController extends Controller
{
    // Show the home page
    public function home()
    {
        $restaurants = Restaurant::all();

        return view('home', compact('restaurants'));
    }

    // Show all restaurants
    public function listRestaurants()
    {
        $restaurants = Restaurant::paginate(10);
        
        return view('restaurant.index', compact('restaurants'));
    }

    // Show a restaurant's details
    public function showRestaurant($id)
    {
        $restaurant = Restaurant::findOrFail($id);

        return view('restaurant.show', compact('restaurant'));
    }

    // Show all chefs
    public function listChef()
    {
        $chefs = Chef::paginate(10);
        
        return view('chef.index', compact('chefs'));
    }

    // Show a chef's details
    public function showChef($id)
    {
        $chef = Chef::findOrFail($id);

        return view('chef.show', compact('chef'));
    }

    // Show reservation form
    public function showReservationForm($restaurantId)
    {
        $restaurants = Restaurant::all();
        
        return view('reservation.form', compact('restaurants'));
    }

    // Handle reservation request
    public function makeReservation(Request $request)
    {
        $request->validate([
            'restaurant_id' => 'required|exists:restaurants,id',
            'user_id' => 'required|exists:users,id',
            'reservation_date' => 'required|date',
            'guests' => 'required|integer|min:1',
        ]);

        Reservation::create($request->all());

        return redirect()->route('restaurant.show', $request->restaurant_id)
                     ->with('success', 'Your reservation has been made successfully!');
    }

    // Contact us page
    public function contactUs()
    {
        return view('contact-us');
    }

    // About page
    public function aboutUs()
    {
        return view('about');
    }

    // Interview page
    public function showInterviews()
    {
        $chefs = Chef::all();

        return view('chef.interview', compact('chefs'));
    }
}
