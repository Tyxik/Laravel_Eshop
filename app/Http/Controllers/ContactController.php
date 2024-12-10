<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     return view(view:'contact.index');     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'nullable|max:255',
            'message' => 'required',
        ]);

        // Logika pro uložení nebo odeslání e-mailu
        // Mail::to('admin@example.com')->send(new ContactFormMail($validated));

        return back()->with('success', 'Vaše zpráva byla úspěšně odeslána.');
    }
}

