@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $restaurant->name }}</h1>
    <p>Location: {{ $restaurant->location }}</p>
    <p>Description: {{ $restaurant->description }}</p>

    <h3>Chefs at this restaurant:</h3>
    <ul>
        @foreach($restaurant->chefs as $chef)
            <li><a href="{{ route('chef.show', $chef->id) }}">{{ $chef->name }}</a></li>
        @endforeach
    </ul>

    <a href="{{ route('reservation.form', $restaurant->id) }}" class="btn btn-success">Make a Reservation</a>
</div>
@endsection