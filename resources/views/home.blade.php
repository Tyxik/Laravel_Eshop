@extends('layouts.app')

@section('content')
    <!-- Hero Section with Image and Gradient -->
    <div class="relative h-screen">
    <img src="https://www.akc.org/wp-content/uploads/2009/01/Cavalier-King-Charles-Spaniel-head-portrait-outdoors.jpg" alt="Vítejte" class="object-cover w-full h-3/4 z-10">
    <div class="absolute inset-0 bg-gradient-to-b from-black to-transparent opacity-50"></div>
    <div class="flex items-start justify-center h-3/4 relative pt-14"> 
        <h1 class="text-white text-5xl font-bold text-center z-10">Vítejte na naší stránce!</h1>
    </div>
</div>

    <!-- Why Choose Us Section -->
    <div class="py-10 text-center bg-gray-100">
    <h2 class="text-3xl font-semibold">Proč nakupovat u nás?</h2>
    <p class="mt-4 text-lg text-gray-700">Nabízíme nejlepší produkty za nejlepší ceny!</p>
    <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-5xl mx-auto px-6">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h3 class="text-lg font-bold">Rychlá Doprava</h3>
            <p class="mt-2 text-gray-600">Zaručujeme rychlé dodání vašich objednávek.</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6">
            <h3 class="text-lg font-bold">Kvalitní Produkty</h3>
            <p class="mt-2 text-gray-600">Naše produkty procházejí důkladným výběrem kvality.</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6">
            <h3 class="text-lg font-bold">Zákaznická Podpora</h3>
            <p class="mt-2 text-gray-600">Jsme tu pro vás, abychom zodpověděli všechny vaše dotazy.</p>
        </div>
    </div>
</div>

   <!-- Products Horizontal Scroll Section -->
   @include( 'components.product-slider');


   @include('components.contact-form');
@endsection

@push('scripts')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.mySwiper', {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
            },
            loop: true, // Přidá loop efekt
        });
    </script>
@endpush
