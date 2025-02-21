<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of all restaurants.
     *
     * This function retrieves and returns all restaurant records from the database.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Restaurant::all();
    }

    /**
     * Display the specified restaurant.
     *
     * This function retrieves and returns a specific restaurant record by its ID,
     * along with its associated chefs. If the restaurant is not found, it throws a
     * 404 Not Found exception.
     *
     * @param int $id
     * @return \App\Models\Restaurant
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function show($id)
    {
        return Restaurant::with('chefs')->findOrFail($id);
    }
}
