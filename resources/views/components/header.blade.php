<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- GSAP for animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <!-- Custom Styles -->
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Arial', sans-serif;
            overflow: auto;
        }

        /* Black overlay and transition */
        .page-transition {
            position: absolute;
            top: 0;
            left: 0;
            height: 100vh;
            width: 100vw;
            background: #000;
            z-index: 1000;
            transform: scaleX(0);
            transform-origin: left;
        }

        .transition-text {
            font-size: 4rem;
            font-weight: bold;
            color: #fff;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            z-index: 1001;
        }

        .transition-sub {
            font-size: 3rem;
            font-weight: bold;
            color: #fff;
            text-align: center;
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            z-index: 1001;
        }

        .content-wrapper {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .content-visible {
            opacity: 1;
        }
    </style>
</head>
<body class="font-sans antialiased dark:bg-gray-900">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <!-- Page transition overlay -->
        <div class="page-transition">
            <div class="transition-text">Barvio</div>
            <div class="transition-sub">Ecologic colors without oil</div>
        </div>

        @include('layouts.navigation')

        <!-- Dark Mode Toggle Button -->
        <div class="fixed bottom-4 right-4 z-50">
            <button id="theme-toggle" class="p-2 rounded-full bg-gray-200 dark:bg-gray-700">
                <span id="theme-toggle-light" class="hidden">☀️</span>
                <span id="theme-toggle-dark">🌙</span>
            </button>
        </div>

        <main class="content-wrapper">
            @yield('content')
        </main>
        
        @include('components.footer')
    </div>

    <!-- Page Transition Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const pageTransition = document.querySelector('.page-transition');
            const contentWrapper = document.querySelector('.content-wrapper');
            const transitionText = document.querySelector('.transition-text');
            const transitionSub = document.querySelector('.transition-sub');

            // Zkontroluj, zda byl přechod už zobrazen
            if (!localStorage.getItem('hasVisitedBefore')) {
                const tl = gsap.timeline({
                    onComplete: () => {
                        contentWrapper.classList.add('content-visible');
                        document.body.style.overflow = 'auto';
                    }
                });

                tl.to(pageTransition, { scaleX: 1, duration: 1.5, transformOrigin: 'left' })
                  .to(transitionText, { opacity: 1, y: -50, duration: 1.5, ease: "power3.out" })
                  .to(transitionSub, { opacity: 1, y: -50, duration: 1.5, ease: "power3.out" })
                  .to(transitionText, { opacity: 0, y: -50, duration: 0.5, ease: "power3.out" })
                  .to(transitionSub, { opacity: 0, y: -50, duration: 0.5, ease: "power3.in" })
                  .to(pageTransition, { scaleX: 0, duration: 1.5, transformOrigin: 'right' });

                localStorage.setItem('hasVisitedBefore', 'true');
            } else {
                document.querySelector('.content-wrapper').classList.add('content-visible');
                document.body.style.overflow = 'auto';
            }

            // DARK MODE TOGGLE
            const themeToggle = document.getElementById('theme-toggle');
            const htmlElement = document.documentElement;
            const lightIcon = document.getElementById('theme-toggle-light');
            const darkIcon = document.getElementById('theme-toggle-dark');

            // Nastavení při načtení
            if (localStorage.getItem('theme') === 'dark') {
                htmlElement.classList.add('dark');
                lightIcon.classList.remove('hidden');
                darkIcon.classList.add('hidden');
            } else {
                htmlElement.classList.remove('dark');
                lightIcon.classList.add('hidden');
                darkIcon.classList.remove('hidden');
            }

            // Přepínání režimu po kliknutí
            themeToggle.addEventListener('click', function () {
                htmlElement.classList.toggle('dark');
                const isDarkMode = htmlElement.classList.contains('dark');

                // Uložení do LocalStorage
                localStorage.setItem('theme', isDarkMode ? 'dark' : 'light');

                // Přepnutí ikon
                lightIcon.classList.toggle('hidden');
                darkIcon.classList.toggle('hidden');
            });
        });
    </script>
</body>
</html>
