<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

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
    public function showReservationForm()
    {
        $restaurants = Restaurant::all();
        
        return view('reservation.form', compact('restaurants'));
    }

    // Handle reservation request
    public function makeReservation(Request $request)
    {
        $request->validate([
            'restaurant_id' => 'required|exists:restaurants,id',
            'reservation_date' => 'required|date_format:Y-m-d\TH:i',
            'guests' => 'required|integer|min:1',
        ]);

        try {
            $reservationData = $request->all();
            $reservationData['user_id'] = auth()->user()->id;
            $reservationData['status'] = 'booked';
    
            $reservation = Reservation::create($reservationData);
    
            // Check if the reservation was created successfully
            if ($reservation) {
                return redirect()->route('reservation.form')
                                 ->with('success', 'Your reservation has been made successfully!');
            } else {
                return redirect()->route('reservation.form')
                                 ->with('error', 'There was an issue making your reservation. Please try again.');
            }
        } catch (\Exception $e) {
            Log::error('Error during reservation creation: ' . $e->getMessage(), [
                'user_id' => auth()->user()->id,
                'reservation_data' => $request->all(),
                'error' => $e->getTraceAsString()
            ]);
    
            return redirect()->route('reservation.form')
                             ->with('error', 'Something went wrong while processing your reservation. Please try again later.');
        }
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
        $chefs = Chef::with('interviews')->take(4)->get();

        return view('chef.interview', compact('chefs'));
    }
}
