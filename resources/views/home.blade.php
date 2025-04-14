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
<div id="why-choose-us" class="py-16 text-center bg-gray-100 dark:bg-gray-800" data-aos="fade-up" data-aos-duration="1500">
    <h2 class="text-4xl font-bold text-gray-900 dark:text-white transition-transform duration-500 ease-in-out hover:scale-110 hover:text-yellow-400">
        Proč nakupovat u nás?
    </h2>
    
    <p class="mt-6 text-xl text-gray-700 dark:text-gray-300 transition-transform duration-500 ease-in-out hover:scale-110 hover:text-yellow-300">
        Nabízíme nejlepší produkty za nejlepší ceny!
    </p>
    <div class="mt-10 flex flex-wrap justify-center gap-8">
        <div class="bg-white dark:bg-gray-700 shadow-lg rounded-xl p-8 max-w-sm group transition-transform duration-500 ease-in-out hover:scale-110 hover:shadow-2xl" data-aos="fade-right" data-aos-duration="1500">
            <div class="flex justify-center">
                <div class="relative">
                    <svg class="w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5"/>
                    </svg>
                    <div class="absolute inset-0 bg-yellow-400 opacity-0 group-hover:opacity-40 rounded-full transition-opacity duration-500 ease-in-out"></div>
                </div>
            </div>
            <h3 class="text-xl font-bold text-gray-900 dark:text-white transition-transform duration-500 ease-in-out group-hover:scale-110 group-hover:underline group-hover:decoration-yellow-400 group-hover:decoration-[4px]">
                Rychlá Doprava
            </h3>
            <p class="mt-4 text-gray-700 dark:text-gray-300 transition-transform duration-500 ease-in-out group-hover:scale-110">
                Zaručujeme rychlé dodání vašich objednávek.
            </p>
        </div>
        <div class="bg-white dark:bg-gray-700 shadow-lg rounded-xl p-8 max-w-sm group transition-transform duration-500 ease-in-out hover:scale-110 hover:shadow-2xl" data-aos="fade-up" data-aos-duration="1500">
            <div class="flex justify-center">
                <div class="relative">
                    <svg class="w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                    </svg>
                    <div class="absolute inset-0 bg-yellow-400 opacity-0 group-hover:opacity-40 rounded-full transition-opacity duration-500 ease-in-out"></div>
                </div>
            </div>
            <h3 class="text-xl font-bold text-gray-900 dark:text-white transition-transform duration-500 ease-in-out group-hover:scale-110 group-hover:underline group-hover:decoration-yellow-400 group-hover:decoration-[4px]">
                Kvalitní Produkty
            </h3>
            <p class="mt-4 text-gray-700 dark:text-gray-300 transition-transform duration-500 ease-in-out group-hover:scale-110">
                Naše produkty procházejí důkladným výběrem kvality.
            </p>
        </div>
        <div class="bg-white dark:bg-gray-700 shadow-lg rounded-xl p-8 max-w-sm group transition-transform duration-500 ease-in-out hover:scale-110 hover:shadow-2xl" data-aos="fade-left" data-aos-duration="1500">
            <div class="flex justify-center">
                <div class="relative">
                    <svg class="w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm5.495.93A.5.5 0 0 0 6.5 13c0 1.19.644 2.438 1.618 3.375C9.099 17.319 10.469 18 12 18c1.531 0 2.9-.681 3.882-1.625.974-.937 1.618-2.184 1.618-3.375a.5.5 0 0 0-.995-.07.764.764 0 0 1-.156.096c-.214.106-.554.208-1.006.295-.896.173-2.111.262-3.343.262-1.232 0-2.447-.09-3.343-.262-.452-.087-.792-.19-1.005-.295a.762.762 0 0 1-.157-.096ZM8.99 8a1 1 0 0 0 0 2H9a1 1 0 1 0 0-2h-.01Zm6 0a1 1 0 1 0 0 2H15a1 1 0 1 0 0-2h-.01Z" clip-rule="evenodd"/>
                    </svg>
                    <div class="absolute inset-0 bg-yellow-400 opacity-0 group-hover:opacity-40 rounded-full transition-opacity duration-500 ease-in-out"></div>
                </div>
            </div>
            <h3 class="text-xl font-bold text-gray-900 dark:text-white transition-transform duration-500 ease-in-out group-hover:scale-110 group-hover:underline group-hover:decoration-yellow-400 group-hover:decoration-[4px]">
                Zákaznická Podpora
            </h3>
            <p class="mt-4 text-gray-700 dark:text-gray-300 transition-transform duration-500 ease-in-out group-hover:scale-110">
                Jsme tu pro vás, abychom zodpověděli všechny vaše dotazy.
            </p>
        </div>
    </div>
</div>

<!-- Products Horizontal Scroll Section -->
@include('components.product-slider')

<!-- Reviews Section -->
@include('components.reviews')

<!-- Contact Form and 3D Model Section -->
<div class="flex justify-center items-center">
    <div class="w-full max-w-7xl bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8 flex flex-wrap md:flex-nowrap gap-8" data-aos="fade-up" data-aos-duration="1500">
        <!-- Contact Form -->
        <div class="w-full md:w-1/2 flex justify-center items-center">
            @include('components.contact-form')
        </div>

        <!-- 3D Model Viewer -->
        <div class="w-full md:w-1/2 flex justify-center items-center">
            @include('components.model-viewer')
        </div>
    </div>
</div>
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