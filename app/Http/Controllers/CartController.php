<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    // Zobrazení košíku
    public function index()
    {
        // Načíst produkty v košíku z session
        $cart = Session::get('cart', []);
        return view('cart.index', compact('cart'));
    }

    // Přidání produktu do košíku
    public function add(Request $request, $productId)
    {
        // Získáme produkt podle ID
        $product = \App\Models\Product::find($productId);

        if ($product) {
            // Získáme aktuální košík
            $cart = Session::get('cart', []);

            // Pokud produkt již v košíku je, přidáme ho
            if (isset($cart[$productId])) {
                $cart[$productId]['quantity']++;
            } else {
                // Jinak přidáme nový produkt
                $cart[$productId] = [
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => 1,
                ];
            }

            // Uložíme košík do session
            Session::put('cart', $cart);

            // Vrať odpověď pro AJAX
            return response()->json([
                'success' => true,
                'message' => 'Produkt byl přidán do košíku.',
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Produkt nenalezen.',
        ]);
    }
}
