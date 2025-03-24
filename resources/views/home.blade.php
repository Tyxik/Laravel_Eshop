@extends('layouts.app')

@section('content')
    <!-- Hero Section with Image and Gradient -->
    <div class="relative h-screen">
        <img src="https://www.akc.org/wp-content/uploads/2009/01/Cavalier-King-Charles-Spaniel-head-portrait-outdoors.jpg" alt="Vítejte" class="object-cover w-full h-3/4 z-10">
        <div class="absolute inset-0 bg-gradient-to-b from-black to-transparent opacity-50"></div>
        
        <!-- Vylepšený nadpis -->
        <div class="flex items-start justify-center h-3/4 relative pt-14"> 
            <h1 class="text-white text-5xl  text-center z-10 animate-flicker tracking-widest transition-all duration-500 ease-in-out hover:scale-110 hover:text-blue-400 glow-text">
                Vítejte na naší stránce!
            </h1>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <div class="py-10 text-center bg-gray-100 dark:bg-gray-800">
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
