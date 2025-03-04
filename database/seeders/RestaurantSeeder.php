<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Restaurant::create([
            'name' => 'The French Bistro',
            'location' => 'Paris, France',
            'image' => 'restaurants/french_bistro.jpg', // Make sure the image exists
            'rating' => 4.5,
        ]);

        Restaurant::create([
            'name' => 'Sushi Master',
            'location' => 'Tokyo, Japan',
            'image' => 'restaurants/sushi_master.jpg',
            'rating' => 5.0,
        ]);

        Restaurant::create([
            'name' => 'La Trattoria',
            'location' => 'Rome, Italy',
            'image' => 'restaurants/la_trattoria.jpg',
            'rating' => 4.2,
        ]);

        Restaurant::create([
            'name' => 'El Camino',
            'location' => 'Barcelona, Spain',
            'image' => 'restaurants/el_camino.jpg',
            'rating' => 4.6,
        ]);

        Restaurant::create([
            'name' => 'Steakhouse Deluxe',
            'location' => 'New York, USA',
            'image' => 'restaurants/steakhouse_deluxe.jpg',
            'rating' => 4.8,
        ]);

        Restaurant::create([
            'name' => 'Noodle House',
            'location' => 'Bangkok, Thailand',
            'image' => 'restaurants/noodle_house.jpg',
            'rating' => 4.0,
        ]);

        Restaurant::create([
            'name' => 'Pasta Fresca',
            'location' => 'Florence, Italy',
            'image' => 'restaurants/pasta_fresca.jpg',
            'rating' => 4.7,
        ]);

        Restaurant::create([
            'name' => 'The Grill House',
            'location' => 'Sydney, Australia',
            'image' => 'restaurants/grill_house.jpg',
            'rating' => 4.3,
        ]);

        Restaurant::create([
            'name' => 'Bistro Delights',
            'location' => 'London, UK',
            'image' => 'restaurants/bistro_delights.jpg',
            'rating' => 3.9,
        ]);

        Restaurant::create([
            'name' => 'Vegetarian Oasis',
            'location' => 'Los Angeles, USA',
            'image' => 'restaurants/vegetarian_oasis.jpg',
            'rating' => 4.4,
        ]);
    }
}
