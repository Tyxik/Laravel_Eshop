@extends('layouts.app')

@section('content')
@include('layouts.navigation') <!-- Navigační menu -->

<!-- Hero Section with Image and Gradient -->
<div class="relative h-screen" data-aos="fade-up">
    <!-- Hodinky obrázek -->
    <img src="http://127.0.0.1:8000/images/pozadi.jpg" alt="Vítejte" class="object-cover w-full h-full z-10">
    
    <!-- Gradient overlay (šedý přechod pro lepší kontrast) -->
    <div class="absolute inset-0 bg-gradient-to-b from-gray-800 via-gray-500 to-transparent opacity-60"></div>
    
    <!-- Vylepšený nadpis a text -->
    <div class="flex flex-col items-center justify-center h-full absolute top-0 left-0 right-0 bottom-0 z-20">
        <!-- Nadpis -->
        <h1 class="text-yellow-500 text-5xl font-bold z-10 animate-flicker tracking-widest transition-all duration-500 ease-in-out hover:scale-110 hover:text-yellow-400"
        style="text-shadow: 1px 1px 2px black;" data-aos="zoom-in" data-aos-duration="1500">
        Vítejte na naší stránce!
        </h1>
        <!-- Text -->
        <p class="bg-black bg-opacity-70 text-white text-lg mt-4 z-10 opacity-90 max-w-lg px-4 text-center rounded-lg py-2 shadow-lg transition-all duration-700 ease-in-out transform hover:scale-105 hover:rotate-1 hover:shadow-2xl group relative cursor-pointer overflow-hidden" data-aos="fade-up" data-aos-duration="1500">
            <span class="block transition-all duration-700 ease-in-out group-hover:opacity-0">
                Naše hodinky jsou tak přesné, že už nikdy nebudete chodit pozdě.
            </span>
            <span class="absolute inset-0 flex items-center justify-center text-center px-4 opacity-0 group-hover:opacity-100 transition-all duration-700 ease-in-out transform group-hover:translate-y-0 translate-y-4">
                Pokud je teda budete nosit! 😄
            </span>
        </p>
        <!-- Tlačítka -->
        <div class="mt-8 flex justify-center z-10">
            <a href="#why-choose-us" 
               class="bg-yellow-500 text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-yellow-300 transition-all duration-300 ease-in-out smooth-scroll"
               style="text-shadow: 1px 1px 2px black;">
                Proč nakupovat u nás?
            </a>
        </div>
    </div>
</div>
<!-- Why Choose Us Section -->
<div id="why-choose-us" class="py-10 text-center bg-gray-100 dark:bg-gray-800" data-aos="fade-up" data-aos-duration="1500">
    <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Proč nakupovat u nás?</h2>
    <p class="mt-4 text-lg text-gray-700 dark:text-gray-300">Nabízíme nejlepší produkty za nejlepší ceny!</p>
    <div class="mt-6 flex flex-wrap justify-center gap-6">
        <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-6 max-w-xs" data-aos="fade-right" data-aos-duration="1500">
            <div class="flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-900 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21V3m0 0L3 10m6-7l6 7" />
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-900 dark:text-white">Rychlá Doprava</h3>
            <p class="mt-2 text-gray-700 dark:text-gray-300">Zaručujeme rychlé dodání vašich objednávek.</p>
        </div>
        <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-6 max-w-xs" data-aos="fade-up" data-aos-duration="1500">
            <div class="flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-900 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zm0 0c-4.418 0-8 1.79-8 4v1h16v-1c0-2.21-3.582-4-8-4z" />
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-900 dark:text-white">Kvalitní Produkty</h3>
            <p class="mt-2 text-gray-700 dark:text-gray-300">Naše produkty procházejí důkladným výběrem kvality.</p>
        </div>
        <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-6 max-w-xs" data-aos="fade-left" data-aos-duration="1500">
            <div class="flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-900 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 14h.01M16 10h.01M9 21h6m-3-3v3m-4-3a4 4 0 118 0m-8 0H5a2 2 0 01-2-2v-5a2 2 0 012-2h14a2 2 0 012 2v5a2 2 0 01-2 2h-4" />
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-900 dark:text-white">Zákaznická Podpora</h3>
            <p class="mt-2 text-gray-700 dark:text-gray-300">Jsme tu pro vás, abychom zodpověděli všechny vaše dotazy.</p>
        </div>
    </div>
</div>

<!-- Products Horizontal Scroll Section -->
@include('components.product-slider')

<!-- Reviews Section -->
@include('components.reviews')

<!-- Contact Form Section -->
@include('components.contact-form')
@endsection

@push('scripts')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="{{ asset('js/scroll.js') }}"></script> <!-- Přidání scroll.js -->

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
                640: { slidesPerView: 2 },
                768: { slidesPerView: 3 },
            },
            loop: true,
        });

        // AOS initialization
        AOS.init({
            duration: 1200,
            easing: 'ease-in-out',
            once: true,
        });
    </script>
@endpush