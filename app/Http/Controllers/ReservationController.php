<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Store a new reservation.
     *
     * @param \Illuminate\Http\Request $request
     * @return \App\Models\Reservation
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'restaurant_id' => 'required',
            'reservation_date' => 'required|date',
            'guests' => 'required|integer'
        ]);

        return Reservation::create([
            'user_id' => auth()->id(),
            'restaurant_id' => $request->restaurant_id,
            'reservation_date' => $request->reservation_date,
            'guests' => $request->guests,
        ]);
    }
}
