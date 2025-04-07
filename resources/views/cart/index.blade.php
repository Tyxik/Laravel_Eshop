@extends('layouts.app')

@section('content')
<div class="container py-10 mx-auto mt-8">
    <h1 class="text-3xl font-semibold text-center mb-8 text-white mt-8">Košík</h1>

    <div class="cart-items">
        @if(session('cart'))
            <ul>
                @foreach(session('cart') as $productId => $product)
                    <li class="cart-item">
                        <div>{{ $product['name'] }} x {{ $product['quantity'] }} - {{ $product['price'] }} Kč</div>
                    </li>
                @endforeach
            </ul>
        @else
            <p>Váš košík je prázdný.</p>
        @endif
    </div>

    <a href="{{ route('checkout.index') }}" class="btn-primary mt-4">Pokračovat k pokladně</a>
</div>
@endsection
