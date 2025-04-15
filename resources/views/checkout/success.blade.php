@extends('layouts.app')

@section('content')
    <div class="container py-10 mx-auto max-w-6xl">
        <h1 class="text-4xl font-semibold text-center text-black mb-8">Úspěšná platba!</h1>
        <p class="text-xl text-center">Vaše platba byla úspěšně zpracována. Děkujeme za nákup!</p>
        <div class="text-center mt-8">
            <a href="{{ url('/') }}" 
   class="px-6 py-3 bg-yellow-400 text-black font-semibold rounded hover:bg-yellow-500 transition duration-300 ease-in-out shadow-md">
    Zpět na hlavní stránku
</a>
        </div>
    </div>
@endsection