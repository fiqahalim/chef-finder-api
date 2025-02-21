@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $chef->name }}</h1>
    <p>Experience: {{ $chef->experience }} years</p>
    <p>Signature Dish: {{ $chef->signature_dish }}</p>
</div>
@endsection
