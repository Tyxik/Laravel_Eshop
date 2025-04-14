<div class="py-16 bg-gray-100">
    <h2 class="text-4xl font-semibold text-center text-gray-800">Kontaktní formulář</h2>
    <p class="text-center text-gray-600 mt-2">Máte dotaz? Neváhejte nás kontaktovat pomocí formuláře níže.</p>
    <form class="max-w-lg mx-auto mt-8 p-8 bg-white shadow-xl rounded-lg" action="https://formspree.io/f/mwplpavd" method="POST">
        @csrf
        <div class="mb-6">
            <label for="name" class="block text-sm font-medium text-gray-700">Jméno</label>
            <input type="text" id="name" name="name" class="border border-gray-300 rounded-md w-full p-4 mt-2 focus:ring-yellow-400 focus:border-yellow-400" placeholder="Vaše jméno" required>
        </div>
        <div class="mb-6">
            <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
            <input type="email" id="email" name="email" class="border border-gray-300 rounded-md w-full p-4 mt-2 focus:ring-yellow-400 focus:border-yellow-400" placeholder="Váš e-mail" required>
        </div>
        <div class="mb-6">
            <label for="phone" class="block text-sm font-medium text-gray-700">Telefon (volitelné)</label>
            <input type="tel" id="phone" name="phone" class="border border-gray-300 rounded-md w-full p-4 mt-2 focus:ring-yellow-400 focus:border-yellow-400" placeholder="Váš telefon">
        </div>
        <div class="mb-6">
            <label for="message" class="block text-sm font-medium text-gray-700">Zpráva</label>
            <textarea id="message" name="message" class="border border-gray-300 rounded-md w-full p-4 mt-2 focus:ring-yellow-400 focus:border-yellow-400" placeholder="Vaše zpráva" rows="5" required></textarea>
        </div>
        <div class="flex items-center mb-6">
            <input type="checkbox" id="consent" name="consent" class="h-4 w-4 text-yellow-500 focus:ring-yellow-400 border-gray-300 rounded" required>
            <label for="consent" class="ml-2 text-sm text-gray-600">Souhlasím se zpracováním osobních údajů.</label>
        </div>
        <button type="submit" class="bg-yellow-500 text-white rounded-md px-6 py-3 hover:bg-yellow-600 transition duration-200 w-full font-semibold">Odeslat</button>
    </form>
</div>