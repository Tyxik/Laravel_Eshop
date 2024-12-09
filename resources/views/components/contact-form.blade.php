
   <!-- Contact Form Section -->
   <div class="py-10 bg-gray-800">
    <h2 class="text-white text-3xl font-semibold text-center mb-6">Kontaktní formulář</h2>
    <form class="max-w-lg mx-auto p-8 bg-white shadow-xl rounded-lg" action="#" method="POST">
        @csrf
        <!-- Name Field -->
        <div class="mb-6">
            <label for="name" class="block text-sm font-medium text-gray-800">Jméno</label>
            <input type="text" id="name" name="name" class="border border-gray-300 rounded-lg w-full p-4 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300" required>
        </div>
        
        <!-- Email Field -->
        <div class="mb-6">
            <label for="email" class="block text-sm font-medium text-gray-800">E-mail</label>
            <input type="email" id="email" name="email" class="border border-gray-300 rounded-lg w-full p-4 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300" required>
        </div>

        <!-- Message Field -->
        <div class="mb-6">
            <label for="message" class="block text-sm font-medium text-gray-800">Zpráva</label>
            <textarea id="message" name="message" class="border border-gray-300 rounded-lg w-full p-4 mt-2 h-40 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300" required></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full bg-blue-500 text-white rounded-lg py-3 font-semibold hover:bg-blue-600 transition duration-300">Odeslat</button>
    </form>
</div>