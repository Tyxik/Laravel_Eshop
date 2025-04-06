<!-- filepath: c:\Users\tylma\Desktop\webovkos\LLLL\Laravel_Eshop\resources\views\products\show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="h-20"></div>
<div class="container mt-20 px-4 sm:px-6 lg:px-8 mx-auto relative top-11">
    <div class="fixed top-10 left-6 z-50">
        <a href="{{ route('products.index') }}" class="btn btn-secondary bg-yellow-500 hover:bg-yellow-300 text-white font-semibold py-2 px-6 rounded-md">
            zpět
        </a>
    </div>

    <!-- Shopping Cart -->
    <div class="fixed top-10 right-6 z-50 bg-white shadow-lg rounded-lg p-4 w-80">
        <h2 class="text-xl font-bold mb-4">Košík</h2>
        <ul id="cart-items" class="space-y-2">
            @if(session('cart') && count(session('cart')) > 0)
                @foreach(session('cart') as $cartItem)
                    <li class="flex justify-between items-center border-b pb-2">
                        <span>{{ $cartItem['name'] }}</span>
                        <span>{{ $cartItem['quantity'] }} x {{ $cartItem['price'] }} Kč</span>
                    </li>
                @endforeach
            @else
                <li class="text-gray-500">Košík je prázdný.</li>
            @endif
        </ul>
        <div class="mt-4">
            <a href="{{ route('cart.index') }}" class="bg-yellow-500 text-white py-2 px-4 rounded-md hover:bg-yellow-300 block text-center">Zobrazit košík</a>
        </div>
    </div>

    <div class="product-details bg-white p-6 shadow-lg rounded-lg mx-auto w-full max-w-screen-xl flex flex-col lg:flex-row space-y-8 lg:space-y-0 lg:space-x-8">
        <!-- Obrázky -->
        <div class="main-image mb-6 lg:w-1/2">
            @if (!empty($product->images))
                <img id="main-image" 
                     src="{{ asset('storage/' . $product->images[0]) }}" 
                     alt="{{ $product->name }}" 
                     class="product-image mx-auto object-cover rounded-lg shadow-lg transition-transform duration-300 hover:scale-105"
                     style="width: 100%; max-width: 700px; height: auto; cursor: pointer;">
            @endif
                                                                      
            <!-- Carousel -->
            <div class="flex justify-between mt-4 relative">
                <button id="prev-image" class="prev-arrow absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-300 p-2 rounded-full">&lt;</button>
                <div class="overflow-hidden w-full">
                    <div class="flex transition-transform duration-300 space-x-4" id="image-carousel">
                        @if(count($product->images) > 0)
                            @foreach ($product->images as $index => $image)
                                <img src="{{ asset('storage/' . $image) }}"
                                     alt="{{ $product->name }}"
                                     class="rounded-lg cursor-pointer image-thumbnail"
                                     data-index="{{ $index }}"
                                     style="width: 80px; height: 80px; object-fit: cover;">
                            @endforeach
                        @else
                            <img src="{{ asset('storage/default-image.jpg') }}"
                                 alt="No image"
                                 class="rounded-lg cursor-pointer image-thumbnail"
                                 style="width: 80px; height: 80px; object-fit: cover;">
                        @endif
                    </div>
                </div>
                <button id="next-image" class="next-arrow absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-300 p-2 rounded-full">&gt;</button>
            </div>
        </div>

        <!-- Informace o produktu -->
        <div class="w-full lg:w-1/2 flex flex-col justify-between">
            <div>
                <h1 class="text-4xl font-bold text-gray-800 mb-6">{{ $product->name }}</h1>
                <p class="text-lg text-gray-600 mb-6">{{ $product->description }}</p>
                <div class="text-lg font-medium text-gray-800 mb-4">
                    <p><strong>Cena: </strong>{{ $product->price }} Kč</p>
                 
                </div>
                <div class="text-lg font-medium text-gray-800 mb-6">
                    <p><strong>Na skladě: </strong>{{ $product->in_stock }}</p>
                    <p>
                        Hodnocení: <strong>{{ number_format($product->averageRating(), 1) }} ⭐</strong>
                        <span class="text-gray-400">({{ $product->reviews->count() }}x)</span>
                    </p>
                </div>
            </div>
            <div class="mt-6">
                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                    @csrf
                    <button onclick="addToCart('{{ $product->id }}')" 
                        class="inline-block px-8 py-3 text-white bg-yellow-500 rounded-md hover:bg-yellow-300 transition w-full lg:w-auto text-center font-semibold shadow-md">
                    Přidat do košíku
                </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Recenze -->
    <div class="p-8 m-8">
        <div class="mt-8 p-6 bg-white shadow-lg rounded-lg">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Customer Reviews</h2>

            @if($product->reviews->count() > 0)
                @foreach($product->reviews as $review)
                    <div class="border-b border-gray-200 pb-4 mb-4">
                        <p class="text-lg font-semibold">{{ $review->user->name ?? 'Neznámý uživatel' }}</p>
                        <p class="text-yellow-500">⭐ {{ $review->rating }} / 5</p>
                        <p class="text-gray-700">{{ $review->comment }}</p>
                    </div>
                @endforeach
            @else
                <p class="text-gray-500">No reviews yet. Be the first to review this product!</p>
            @endif

            @auth
                @php
                    $existingReview = $product->reviews->where('user_id', Auth::id())->first();
                @endphp

                @if(!$existingReview)
                <div class="mt-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Add a Review</h3>
                    <form action="{{ route('reviews.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="mb-4">
                            <label for="rating" class="block text-lg font-medium text-gray-700">Rating</label>
                            <select name="rating" id="rating" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="5">⭐️⭐️⭐️⭐️⭐️ - Excellent</option>
                                <option value="4">⭐️⭐️⭐️⭐️ - Good</option>
                                <option value="3">⭐️⭐️⭐️ - Average</option>
                                <option value="2">⭐️⭐️ - Poor</option>
                                <option value="1">⭐️ - Terrible</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="comment" class="block text-lg font-medium text-gray-700">Comment</label>
                            <textarea name="comment" id="comment" rows="3" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
                        </div>
                        <button type="submit" class="bg-yellow-500 text-white py-2 px-6 rounded-md hover:bg-yellow-300">Submit Review</button>
                    </form>
                </div>
                @else
                <p class="text-lg font-semibold text-gray-600">You have already reviewed this product. Thank you!</p>
                @endif
            @else
                <p class="mt-4 text-gray-500"><a href="{{ route('login') }}" class="text-yellow-500 hover:underline">Log in</a> to leave a review.</p>
            @endauth
        </div>

        <x-infinite_slider :products="$relatedProducts" />
    </div>
</div>
