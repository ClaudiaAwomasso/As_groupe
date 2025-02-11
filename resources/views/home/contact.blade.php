@extends('home.layouts.app')
@section('title', '')
@section('content')


<div class="hero-banner">
    <div class="hero-content">
        <h1 class="hero-title">Contactez-nous</h1>
        <p class="hero-subtitle">Nous sommes à votre écoute pour répondre à vos besoins.</p>
        <a href="{{ route('services') }}" class="hero-btn">Découvrez nos services</a>
    </div>
</div>

<!-- Formulaire de contact -->
<section class="py-12 contact_section">
    <div class="container mx-auto p-3">
        <h2 class="text-2xl font-bold text-center mb-8">Envoyez-nous un message</h2>
        <div class="flex flex-wrap lg:flex-nowrap items-center gap-8">
            <!-- Formulaire -->
       <div class="row">
        <div class="col-lg-6 col-md-6 ">
            <form action="{{ route('contact.send') }}" method="POST" class="flex-1">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-lg font-semibold" style="color: #2149A6">Nom complet</label>
                    <input type="text" id="name" name="name" required class="w-full border border-gray-300 rounded-lg p-3">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-lg font-semibold" style="color: #2149A6">Adresse e-mail</label>
                    <input type="email" id="email" name="email" required class="w-full border border-gray-300 rounded-lg p-3">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-lg font-semibold" style="color: #2149A6">Numéro de téléphone</label>
                    <input type="tel" id="phone" name="phone" class="w-full border border-gray-300 rounded-lg p-3">
                </div>
                <div class="mb-4">
                    <label for="subject" class="block text-lg font-semibold" style="color: #2149A6">Sujet</label>
                    <select id="subject" name="subject" class="w-full border border-gray-300 rounded-lg p-3">
                        <option value="information">Demande d'information</option>
                        <option value="quote">Devis</option>
                        <option value="other">Autre</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-lg font-semibold" style="color: #2149A6">Message</label>
                    <textarea id="message" name="message" required class="w-full border border-gray-300 rounded-lg p-3 h-32"></textarea>
                </div>
                <button type="submit" class="text-primary py-3 px-6 rounded-lg hover:bg-blue-700" >
                    Envoyer
                </button>
                @if(session('success'))
                    <div class="mt-4 text-green-600 font-bold">{{ session('success') }}</div>
                @endif
            </form>
        </div>

            <!-- Image -->
            <div class="flex-1 hidden lg:block col-lg-6 col-md-6  p-3">
                <img class="imagetel m-2" src="{{ asset('home/images/tel.jpg') }}" alt="">
            </div>
       </div>
        </div>
    </div>
</section>
{{--
<!-- Coordonnées -->
<section class="py-12 bg-gray-100 ">
    <div class="container mx-auto ">
        <h2 class="text-2xl font-bold" style="color:#2149A6">Nos coordonnées</h2>
        <p class="mt-4">Vous pouvez également nous joindre directement via les coordonnées ci-dessous :</p>
        <ul class="mt-6 text-lg ">
            <li>📍 Adresse : <span>123 Rue de l’Entreprise, Ville</span></li>
            <li>📞 Téléphone : <span>+123 456 7890</span></li>
            <li>📧 E-mail : <span>contact@asgroupe.com</span></li>
            <li>🕒 Horaires : Lundi - Vendredi : 9h - 18h</li>
        </ul>
    </div>

</section> --}}

@endsection








