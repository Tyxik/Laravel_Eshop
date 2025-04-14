@extends('layouts.app')

@section('content')
<div class="h-20"> </div>
<div class="container mx-auto py-10">
    <h1 class="text-4xl font-semibold text-center mb-8 text-yellow-500 hover:text-yellow-600 transition duration-300 ease-in-out">
        Časté dotazy o hodinkách
    </h1>
    <div class="space-y-6">
        <!-- První dotaz -->
        <div>
            <button class="w-full text-left text-lg font-medium text-gray-800 bg-gray-100 px-6 py-4 rounded-lg flex justify-between items-center shadow-sm hover:bg-gray-200 transition hover:animate-pulse"
                    onclick="toggleAnswer(this)">
                Jak dlouho vydrží baterie hodinek?
                <span class="ml-4">+</span>
            </button>
            <div class="answer hidden mt-2 text-gray-700 px-6">
                Výdrž baterie závisí na modelu hodinek. Obvykle se pohybuje mezi 1-2 roky u klasických hodinek a 1-7 dny u chytrých hodinek.
            </div>
        </div>

        <!-- Druhý dotaz -->
        <div>
            <button class="w-full text-left text-lg font-medium text-gray-800 bg-gray-100 px-6 py-4 rounded-lg flex justify-between items-center shadow-sm hover:bg-gray-200 transition hover:animate-pulse"
                    onclick="toggleAnswer(this)">
                Jsou hodinky vodotěsné?
                <span class="ml-4">+</span>
            </button>
            <div class="answer hidden mt-2 text-gray-700 px-6">
                Ano, většina našich hodinek je vodotěsná. Podrobnosti o vodotěsnosti najdete v popisu konkrétního modelu.
            </div>
        </div>

        <!-- Třetí dotaz -->
        <div>
            <button class="w-full text-left text-lg font-medium text-gray-800 bg-gray-100 px-6 py-4 rounded-lg flex justify-between items-center shadow-sm hover:bg-gray-200 transition hover:animate-pulse"
                    onclick="toggleAnswer(this)">
                Nabízíte záruku na hodinky?
                <span class="ml-4">+</span>
            </button>
            <div class="answer hidden mt-2 text-gray-700 px-6">
                Ano, na všechny naše hodinky poskytujeme záruku 2 roky.
            </div>
        </div>

        <!-- Čtvrtý dotaz -->
        <div>
            <button class="w-full text-left text-lg font-medium text-gray-800 bg-gray-100 px-6 py-4 rounded-lg flex justify-between items-center shadow-sm hover:bg-gray-200 transition hover:animate-pulse"
                    onclick="toggleAnswer(this)">
                Jaké materiály jsou použity na výrobu hodinek?
                <span class="ml-4">+</span>
            </button>
            <div class="answer hidden mt-2 text-gray-700 px-6">
                Naše hodinky jsou vyrobeny z kvalitních materiálů, jako je nerezová ocel, titan, keramika a safírové sklo.
            </div>
        </div>

        <!-- Pátý dotaz -->
        <div>
            <button class="w-full text-left text-lg font-medium text-gray-800 bg-gray-100 px-6 py-4 rounded-lg flex justify-between items-center shadow-sm hover:bg-gray-200 transition hover:animate-pulse"
                    onclick="toggleAnswer(this)">
                Nabízíte chytré hodinky?
                <span class="ml-4">+</span>
            </button>
            <div class="answer hidden mt-2 text-gray-700 px-6">
                Ano, v naší nabídce najdete i chytré hodinky s funkcemi, jako je měření tepu, GPS a notifikace.
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes explode {
        0% {
            transform: scale(1);
            opacity: 1;
            background-color: yellow;
        }
        50% {
            transform: scale(1.2);
            opacity: 0.7;
            background-color: #fbbf24; /* Světlejší žlutá */
        }
        100% {
            transform: scale(1);
            opacity: 1;
            background-color: yellow;
        }
    }

    .hover-explode:hover {
        animation: explode 0.5s ease-in-out;
    }

    .answer {
        height: 0;
        overflow: hidden;
        opacity: 0;
        transition: height 0.5s ease, opacity 0.5s ease;
    }

    .answer.show {
        height: auto;
        opacity: 1;
    }

    button {
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    button:hover {
        background-color: #e5e7eb; /* Světle šedá při hoveru */
        color: #1f2937; /* Tmavší text při hoveru */
    }
</style>

<script>
function toggleAnswer(button) {
    const answer = button.nextElementSibling;
    const isHidden = answer.classList.contains('hidden');
    
    // Toggle visibility with animation
    answer.classList.toggle('hidden');
    answer.classList.toggle('show');
    button.querySelector('span').textContent = isHidden ? '−' : '+';
}
</script>

@endsection