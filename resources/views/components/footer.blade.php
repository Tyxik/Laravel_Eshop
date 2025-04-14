<!-- Konec stránky -->
<hr class="border-t border-gray-200 my-8">

<!-- Začátek patičky -->
<footer class="bg-gray-900 text-gray-300 py-12">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-between">
            <!-- Logo a popis -->
            <div class="w-full md:w-1/3 mb-12 md:mb-0">
                <h2 class="text-2xl font-bold text-yellow-400 mb-4">Laravel Eshop</h2>
                <p class="text-gray-400 leading-relaxed">Objevte svět pohodlného online nakupování. Nabízíme kvalitní produkty za skvělé ceny s rychlým doručením.</p>
            </div>

            <!-- Navigační odkazy -->
            <div class="w-full md:w-1/3 mb-12 md:mb-0 text-center md:text-left">
                <h3 class="text-xl font-semibold text-yellow-400 mb-4">Rychlé odkazy</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-yellow-400 transition">Domů</a></li>
                    <li><a href="{{ route('products.index') }}" class="text-gray-400 hover:text-yellow-400 transition">Produkty</a></li>
                    <li><a href="{{ route('contact.index') }}" class="text-gray-400 hover:text-yellow-400 transition">Kontakt</a></li>
                    <li><a href="{{ route('questions.index') }}" class="text-gray-400 hover:text-yellow-400 transition">Q&A</a></li>
                </ul>
            </div>

            <!-- Kontakt -->
            <div class="w-full md:w-1/3">
                <h3 class="text-xl font-semibold text-yellow-400 mb-4">Kontakt</h3>
                <ul class="space-y-2">
                    <li><p class="text-gray-400">Email: <a href="mailto:support@laraveleshop.com" class="hover:text-yellow-400">support@laraveleshop.com</a></p></li>
                    <li><p class="text-gray-400">Telefon: <a href="tel:+420123456789" class="hover:text-yellow-400">+420 123 456 789</a></p></li>
                    <li><p class="text-gray-400">Adresa: Praha, Česká republika</p></li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-12 text-center text-gray-500 text-sm">
            &copy; {{ date('Y') }} <span class="text-yellow-400">Laravel Eshop by Tyxik</span>. 
        </div>
    </div>
</footer>