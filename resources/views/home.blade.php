@extends('layouts.app')

@section('content')
   <!-- Hero Section with Image and Gradient -->
<div class="relative h-screen">
    <!-- Hodinky obrázek -->
    <img src="http://127.0.0.1:8000/images/pozadi.jpg" alt="Vítejte" class="object-cover w-full h-full z-10">
    
    <!-- Gradient overlay (šedý přechod pro lepší kontrast) -->
    <div class="absolute inset-0 bg-gradient-to-b from-gray-800 via-gray-500 to-transparent opacity-60"></div>
    
    <!-- Vylepšený nadpis a text -->
    <div class="flex flex-col items-center justify-center h-full absolute top-0 left-0 right-0 bottom-0 z-20">
        <!-- Nadpis -->
        <h1 class="text-yellow-500 text-5xl font-bold z-10 animate-flicker tracking-widest transition-all duration-500 ease-in-out hover:scale-110 hover:text-yellow-400">
            Vítejte na naší stránce!
        </h1>
        
        <!-- Text (se změněným kontrastem a zvětšeným fontem) -->
        <p class="bg-black bg-opacity-70 text-white text-lg mt-4 z-10 opacity-90 max-w-lg px-4 text-center rounded-lg py-2 shadow-lg">
            Objevte elegantní a kvalitní hodinky, které dokonale doplní váš styl. Naše hodinky jsou kombinací preciznosti a designu.
        </p>
        <!-- Tlačítka -->
        <div class="mt-8 flex space-x-4 z-10">
            <!-- Tlačítko pro přechod na Products -->
            <a href="/products" class="bg-yellow-500 text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-yellow-600 transition-all duration-300 ease-in-out">
                Prozkoumat produkty
            </a>
            <!-- Tlačítko pro posunutí na Why Choose Us -->
            <a href="#why-choose-us" class="bg-transparent border-2 bg-white text-black px-6 py-3 rounded-full text-lg font-semibold hover:bg-yellow-500 hover:text-black transition-all duration-300 ease-in-out">
                Proč si nás vybrat?
            </a>
        </div>
    </div>
</div>
    <!-- Why Choose Us Section -->
    <div id="why-choose-us" class="py-10 text-center bg-gray-100 dark:bg-gray-800">
        <h2 class="text-3xl font-Array text-gray-900 dark:text-white">Proč nakupovat u nás?</h2>
        <p class="mt-4 text-lg text-gray-700 dark:text-gray-300">Nabízíme nejlepší produkty za nejlepší ceny!</p>
        <div class="mt-6 flex flex-wrap justify-center gap-6">
            <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-6 max-w-xs">
                <div class="flex justify-center">
                    <x-heroicon-o-truck class="h-16 w-16 text-gray-900 dark:text-gray-300"></x-heroicon-o-truck>
                </div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white">Rychlá Doprava</h3>
                <p class="mt-2 text-gray-700 dark:text-gray-300">Zaručujeme rychlé dodání vašich objednávek.</p>
            </div>
            <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-6 max-w-xs">
                <div class="flex justify-center">
                    <x-iconsax-bro-sidebar-right class="h-16 w-16 text-gray-900 dark:text-gray-300"></x-iconsax-bro-sidebar-right>
                </div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white">Kvalitní Produkty</h3>
                <p class="mt-2 text-gray-700 dark:text-gray-300">Naše produkty procházejí důkladným výběrem kvality.</p>
            </div>
            <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-6 max-w-xs">
                <div class="flex justify-center">
                    <x-gmdi-support-agent-o class="h-16 w-16 text-gray-900 dark:text-gray-300"></x-gmdi-support-agent-o>
                </div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white">Zákaznická Podpora</h3>
                <p class="mt-2 text-gray-700 dark:text-gray-300">Jsme tu pro vás, abychom zodpověděli všechny vaše dotazy.</p>
            </div>
        </div>
    </div>

    <!-- Products Horizontal Scroll Section -->
    @include('components.product-slider')

    <!-- Reviews Section (Now under the slider) -->
    @include('components.reviews')

    <!-- Contact Form Section -->
    @include('components.contact-form')
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
                640: { slidesPerView: 2 },
                768: { slidesPerView: 3 },
            },
            loop: true, // Přidá loop efekt
        });

        // Přepínání dark mode
        document.addEventListener('DOMContentLoaded', function () {
            const themeToggle = document.getElementById('theme-toggle');
            const htmlElement = document.documentElement;

            if (localStorage.getItem('theme') === 'dark') {
                htmlElement.classList.add('dark');
            }

            themeToggle.addEventListener('click', function () {
                if (htmlElement.classList.contains('dark')) {
                    htmlElement.classList.remove('dark');
                    localStorage.setItem('theme', 'light');
                } else {
                    htmlElement.classList.add('dark');
                    localStorage.setItem('theme', 'dark');
                }
            });
        });
    </script>
@endpush
