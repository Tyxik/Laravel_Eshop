@extends('layouts.app')

@section('content')
<div class="h-20"> </div>
<div class="container mt-20 px-4 sm:px-6 lg:px-8 mx-auto relative top-11">
    <!-- Back Button (Přesunuto doleva nahoře) -->
    <div class="fixed top-10 left-6 z-50">
        <a href="{{ route('products.index') }}" class="btn btn-secondary bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-md">
            Back to Products
        </a>
    </div>

    <div class="product-details bg-white p-6 shadow-lg rounded-lg mx-auto w-full lg:w-4/5 flex justify-between">
        <!-- Product Image Section -->
        <div class="flex">
            <div class="w-full lg:w-1/2 pr-4">
                <!-- Main Image -->
                <div class="main-image mb-6">
                    @if (!empty($product->images))
                    <img id="main-image" src="{{ asset('storage/gallery' . $product->images[0]) }}"
                        alt="{{ $product->name }}"
                        class="product-image mx-auto object-cover rounded-lg"
                        style="width: 300px; height: 300px; cursor: pointer;">
                    @endif
                </div>
                <div>
    @foreach (json_decode($product->images) as $image)
        <p>Image Path: {{ asset('storage/gallery/' . $image) }}</p>
        <img src="{{ asset('storage/gallery/' . $image) }}" alt="{{ $product->name }}" class="product-image">
    @endforeach
</div>
                <!-- Additional Product Images (Carousel) -->
                <div class="flex justify-between mt-4 relative">
                    <button id="prev-image" class="prev-arrow absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-300 p-2 rounded-full">
                        &lt;
                    </button>
                    <div class="overflow-hidden w-full">
                        <div class="flex transition-transform duration-300" id="image-carousel">
                            @if (is_array($product->images))
                                @foreach ($product->images as $index => $image)
                                    <img src="{{ asset('storage/Gallery' . $image) }}"
                                         alt="{{ $product->name }}"
                                         class="rounded-lg cursor-pointer image-thumbnail"
                                         data-index="{{ $index }}"
                                         style="width: 80px; height: 80px; object-fit: cover; max-width: 80px; max-height: 80px;">
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <button id="next-image" class="next-arrow absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-300 p-2 rounded-full">
                        &gt;
                    </button>
                </div>
            </div>

            <!-- Product Information Section -->
            <div class="w-full lg:w-2/2 pl-4">
                <h1 class="text-3xl font-semibold text-gray-800 mb-4 text-right">{{ $product->name }}</h1>
                <p class="text-lg text-gray-600 mb-4 text-right">{{ $product->description }}</p>
                <div class="flex justify-end text-lg font-medium text-gray-800">
                    <p class="text-right"><strong>Price: </strong>{{ $product->price }} Kč</p>
                    <p class="text-right"><strong>SKU: </strong>{{ $product->sku }}</p>
                </div>
                <div class="flex justify-end text-lg font-medium text-gray-800 mt-2">
                    <p class="text-right"><strong>In Stock: </strong>{{ $product->in_stock }}</p>
                    <p class="text-right">
                        Hodnocení: <strong>{{ number_format($product->averageRating(), 1) }} ⭐</strong>
                        <span class="text-gray-400">({{ $product->reviews->count() }}x)</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

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
                @if($existingReview)
                    <p class="text-lg font-semibold text-gray-600">You have already reviewed this product. Thank you!</p>
                @else
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
                            <button type="submit" class="bg-blue-500 text-white py-2 px-6 rounded-md hover:bg-blue-600">
                                Submit Review
                            </button>
                        </form>
                    </div>
                @endif
            @else
                <p class="mt-4 text-gray-500">
                    <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Log in</a> to leave a review.
                </p>
            @endauth
        </div>
        <x-infinite_slider :products="$relatedProducts" />
    </div>
</div>
@endsection
