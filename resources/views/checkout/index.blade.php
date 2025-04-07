@extends('layouts.app')

@section('content')
    <div class="container py-10 mx-auto mt-8">
        <h1 class="text-3xl font-semibold text-center mb-8 text-white mt-8">Pokladna</h1>

        <div class="checkout-details">
            <!-- Display the details of the cart and the checkout process here -->
        </div>

        <a href="{{ route('home') }}" class="btn-primary mt-4">Pokračovat na domovskou stránku</a>
    </div>
@endsection
