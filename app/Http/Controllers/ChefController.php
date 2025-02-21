<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    /**
     * Display a listing of all chefs along with their associated restaurants.
     *
     * This function retrieves and returns all chef records from the database,
     * including the related restaurant information for each chef.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Chef::with('restaurant')->get();
    }
}
