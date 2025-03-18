<!-- resources/views/components/reviews.blade.php -->
<div class="reviews-container bg-gray-50 py-10">
    <h2 class="text-3xl font-semibold text-center mb-6">Co o nás říkají naši zákazníci</h2>

    <div class="max-w-4xl mx-auto flex justify-center gap-6">
        <!-- Example Review 1 -->
        <div class="review bg-white p-6 shadow-md rounded-lg w-80">
            <div class="flex items-center mb-4">
                <div class="w-10 h-10 rounded-full bg-gray-300 mr-4"></div> <!-- Placeholder for user avatar -->
                <div>
                    <h4 class="font-semibold text-lg">Luky Puky</h4>
                    <p class="text-gray-500">Leden 18, 2025</p>
                </div>
            </div>
            <div class="flex mb-2">
                <!-- Star rating (example) -->
                <span class="text-yellow-500">★★★★★</span>
            </div>
            <p class="text-gray-600">"Skvélé produkty a velmi rychlé dodání! Určitě se vrátím na další nákup!"</p>
        </div>

        <!-- Example Review 2 -->
        <div class="review bg-white p-6 shadow-md rounded-lg w-80">
            <div class="flex items-center mb-4">
                <div class="w-10 h-10 rounded-full bg-gray-300 mr-4"></div> <!-- Placeholder for user avatar -->
                <div>
                    <h4 class="font-semibold text-lg">Petr Vyskoč</h4>
                    <p class="text-gray-500">Září 17, 2025</p>
                </div>
            </div>
            <div class="flex mb-2">
                <span class="text-yellow-500">★★★★☆</span>
            </div>
            <p class="text-gray-600">"Kvalita produktů je výborná. Doporučuji každému, kdo hledá kvalitní zboží za dobrou cenu!"</p>
        </div>
        
        <!-- Example Review 3 (Newly Added) -->
        <div class="review bg-white p-6 shadow-md rounded-lg w-80">
            <div class="flex items-center mb-4">
                <div class="w-10 h-10 rounded-full bg-gray-300 mr-4"></div> <!-- Placeholder for user avatar -->
                <div>
                    <h4 class="font-semibold text-lg">Radoš Gremlinský</h4>
                    <p class="text-gray-500">Květen 16, 2025</p>
                </div>
            </div>
            <div class="flex mb-2">
                <span class="text-yellow-500">★★★★★</span>
            </div>
            <p class="text-gray-600">"Skvělý obchod! Produkty jsou kvalitní, ceny jsou příznivé a zákaznická podpora je na vysoké úrovni. Určitě se sem vrátím!"</p>
        </div>
    </div>

    <!-- Average Rating (Optional) -->
    <div class="text-center mt-8">
        <p class="text-xl font-semibold">Průměrné hodnocení: 4.8/5</p>
    </div>
</div>
