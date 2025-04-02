<!-- resources/views/components/infinite_slider.blade.php -->
<div class="relative py-8">
    <!-- Levá šipka -->
    <button id="leftArrow" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-black hover:bg-gray-800 text-white rounded-full w-12 h-12 flex items-center justify-center z-10 transition-all duration-300 ease-in-out"
        onclick="scrollSlider(event, 'left')">
        &#9664; <!-- Levá šipka -->
    </button>

    <!-- Slider -->
    <div id="slider" class="flex overflow-x-auto space-x-4 pb-6 scroll-smooth">
        @foreach($products as $product)
        <div class="product-item min-w-[200px] bg-white shadow-md rounded-lg p-4">
            @if(isset($product->images[0]))
                <img id="main-image" src="{{ asset('storage/gallery/' . $product->images[0]) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover rounded-lg mb-4">
            @else
                <img id="main-image" src="{{ asset('storage/default.jpg') }}" alt="No Image" class="w-full h-48 object-cover rounded-lg mb-4">
            @endif
            <h3 class="text-xl font-semibold text-gray-800">{{ $product->name }}</h3>
            <p class="text-lg text-gray-600">{{ $product->price }} Kč</p>
            <a href="{{ route('products.show', $product->id) }}" class="text-yellow-500 hover:text-yellow-300">View Product</a>
        </div>
        @endforeach
    </div>

    <!-- Pravá šipka -->
    <button id="rightArrow" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-black hover:bg-gray-800 text-white rounded-full w-12 h-12 flex items-center justify-center z-10 transition-all duration-300 ease-in-out"
        onclick="scrollSlider(event, 'right')">
        &#9654; <!-- Pravá šipka -->
    </button>
</div>

<script>
    function scrollSlider(event, direction) {
        event.preventDefault();
        const slider = document.getElementById('slider');
        const scrollAmount = 300;

        if (!slider) {
            console.error('Slider not found!');
            return;
        }

        if (direction === 'left') {
            slider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        } else if (direction === 'right') {
            slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        }
    }
</script>

<style>
    #slider {
        display: flex;
        overflow-x: auto;
        padding-bottom: 6px;
        scroll-behavior: smooth;
    }

    .product-item {
        min-width: 200px;
        background-color: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        padding: 16px;
        margin-right: 16px;
        flex-shrink: 0;
        transition: transform 0.3s ease-in-out;
    }

    .product-item:hover {
        transform: scale(1.05);
    }

    #slider img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 12px;
    }

    #leftArrow, #rightArrow {
        position: absolute;
        top: 45%;
        z-index: 10;
        cursor: pointer;
        background-color: black;
        border: none;
        padding: 8px;
        border-radius: 50%;
        transition: background-color 0.3s, transform 0.3s ease-in-out;
        color: white;
        font-size: 20px;
        width: 48px;
        height: 48px;
    }

    #leftArrow {
        left: 16px;
    }

    #rightArrow {
        right: 16px;
    }

    #leftArrow:hover, #rightArrow:hover {
        background-color: rgba(0, 0, 0, 0.7);
        transform: scale(1.2);
    }

    @media (max-width: 768px) {
        .product-item {
            min-width: 150px;
        }

        #leftArrow, #rightArrow {
            width: 40px;
            height: 40px;
        }
    }

    #slider .product-item:first-child {
        margin-left: 0;
    }

    #slider .product-item:last-child {
        margin-right: 0;
    }
</style>
