<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('home.contact');
    }

    public function sendEmail(Request $request)
    {
        // Validation des données du formulaire
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|regex:/^[0-9]{10}$/',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Envoi de l'email
        Mail::to('asgroupe12@gmail.com')->send(new ContactMail($data));

        return back()->with('success', 'Votre message a été envoyé avec succès.');
    }
}
