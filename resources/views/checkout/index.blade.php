@extends('layouts.app')

@section('content')
<div class="h-20"></div>
    <div class="container py-10 mx-auto max-w-6xl">
        <h1 class="text-4xl font-semibold text-center text-yellow-600 mb-8">Pokladna</h1>

        <!-- Back to Cart Button -->
        <div class="text-center mb-4 mt-8">
            <a href="{{ route('cart.index') }}" class="inline-block px-8 py-3 text-yellow-900 bg-yellow-400 rounded-lg shadow-md hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-300 focus:ring-offset-2 transition duration-300 ease-in-out">
                Zpět do košíku
            </a>
        </div>

        @if(session('cart') && count(session('cart')) > 0)
            <div class="overflow-x-auto bg-yellow-50 shadow-lg rounded-lg">
                <table class="min-w-full table-auto text-yellow-900">
                    <thead class="bg-yellow-400 text-yellow-900">
                        <tr>
                            <th class="px-6 py-3 text-left">Produkt</th>
                            <th class="px-6 py-3 text-left">Cena</th>
                            <th class="px-6 py-3 text-left">Množství</th>
                            <th class="px-6 py-3 text-left">Celková cena</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(session('cart') as $id => $item)
                            <tr class="border-b border-yellow-200 hover:bg-yellow-100 text-yellow-900">
                                <td class="px-6 py-4 text-sm font-medium">{{ $item['name'] }}</td>
                                <td class="px-6 py-4 text-sm">{{ number_format($item['price'] * 22, 2) }} Kč</td>
                                <td class="px-6 py-4 text-sm">{{ $item['quantity'] }}</td>
                                <td class="px-6 py-4 text-sm">{{ number_format($item['price'] * $item['quantity'] * 22, 2) }} Kč</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Total Price -->
            <div class="mt-8 flex justify-end text-xl font-semibold">
                <p class="text-yellow-900">Celková cena: {{ number_format(array_sum(array_map(function ($item) {
                    return $item['price'] * $item['quantity'] * 22;
                }, session('cart'))), 2) }} Kč</p>
            </div>

            <!-- Checkout Form -->
            <div class="mt-8">
                <form action="{{ route('checkout.process') }}" method="POST" class="bg-yellow-50 shadow-lg rounded-lg p-6">
                    @csrf
                    <h3 class="text-2xl font-semibold text-center text-yellow-600 mb-6">Zadejte své údaje pro dokončení objednávky</h3>

                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-yellow-700">Jméno</label>
                        <input type="text" name="name" id="name" class="w-full mt-2 p-3 border border-yellow-300 rounded-lg" required>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-yellow-700">Email</label>
                        <input type="email" name="email" id="email" class="w-full mt-2 p-3 border border-yellow-300 rounded-lg" required>
                    </div>

                    <div class="mb-4">
                        <label for="address" class="block text-sm font-medium text-yellow-700">Adresa</label>
                        <input type="text" name="address" id="address" class="w-full mt-2 p-3 border border-yellow-300 rounded-lg" required>
                    </div>

                    <!-- Payment Method Selection -->
                    <div class="mb-4">
                        <label for="payment_method" class="block text-sm font-medium text-yellow-700">Metoda platby</label>
                        <select name="payment_method" id="payment_method" class="w-full mt-2 p-3 border border-yellow-300 rounded-lg" required>
                            <option value="paypal">PayPal</option>
                            <option value="gopay">GoPay</option>
                            <option value="visa">Visa</option>
                        </select>
                    </div>

                    <div class="mt-6 flex justify-center">
                        <button type="submit" class="inline-block px-8 py-4 bg-yellow-600 text-white rounded-lg shadow-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 transition duration-300 ease-in-out">
                            Dokončit objednávku
                        </button>
                    </div>
                </form>
            </div>
        @else
            <p class="text-center text-yellow-900 text-xl mt-6">Váš košík je prázdný. Prohlédněte si naše produkty a přidejte něco do košíku!</p>
        @endif
    </div>
@endsection