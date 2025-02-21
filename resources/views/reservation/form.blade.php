@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Make a Reservation</h1>
    <form action="{{ route('reservation.make') }}" method="POST">
        @csrf
        <input type="hidden" name="restaurant_id" value="{{ $restaurantId }}">

        <label>Date & Time:</label>
        <input type="datetime-local" name="reservation_date" required class="form-control">

        <label>Number of Guests:</label>
        <input type="number" name="guests" required class="form-control">

        <button type="submit" class="btn btn-primary mt-3">Confirm Reservation</button>
    </form>
</div>
@endsection
