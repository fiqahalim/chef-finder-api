<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservation;
use Carbon\Carbon;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reservation::create([
            'user_id' => 1,
            'restaurant_id' => 1,
            'reservation_date' => Carbon::create('2025', '03', '15', '19', '00', '00'),
            'guests' => 2,
            'status' => 'booked', // Default status
        ]);

        Reservation::create([
            'user_id' => 2,
            'restaurant_id' => 2,
            'reservation_date' => Carbon::create('2025', '03', '18', '20', '30', '00'),
            'guests' => 4,
            'status' => 'cancelled',
        ]);

        Reservation::create([
            'user_id' => 3,
            'restaurant_id' => 3,
            'reservation_date' => Carbon::create('2025', '03', '20', '18', '45', '00'),
            'guests' => 3,
            'status' => 'completed',
        ]);

        Reservation::create([
            'user_id' => 4,
            'restaurant_id' => 4,
            'reservation_date' => Carbon::create('2025', '03', '22', '21', '00', '00'),
            'guests' => 5,
            'status' => 'booked',
        ]);

        Reservation::create([
            'user_id' => 5,
            'restaurant_id' => 5,
            'reservation_date' => Carbon::create('2025', '03', '24', '19', '30', '00'),
            'guests' => 2,
            'status' => 'completed',
        ]);

        Reservation::create([
            'user_id' => 6,
            'restaurant_id' => 6,
            'reservation_date' => Carbon::create('2025', '03', '27', '20', '00', '00'),
            'guests' => 4,
            'status' => 'cancelled',
        ]);
    }
}
