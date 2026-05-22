@extends('layouts.app')

@section('title', 'Contact - MyDarlinng')

@section('content')
{{-- Hero --}}
<section class="relative py-24 overflow-hidden">
    <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?w=1600&q=80" alt="Couple" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative z-10 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-serif font-bold text-white italic mb-4">Contactez-nous</h1>
        <p class="text-lg text-gray-200">
            Une question, une suggestion ou besoin d'aide ? Notre équipe est à votre écoute et vous répond rapidement.
        </p>
    </div>
</section>

{{-- Contact Content --}}
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-16">
            {{-- Contact Info --}}
            <div>
                <h2 class="text-2xl font-serif font-bold text-gray-900 mb-8">Nos coordonnées</h2>

                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Email</h3>
                            <p class="text-gray-600">bonjour@mydarlinng.fr</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Téléphone</h3>
                            <p class="text-gray-600">+225 07 00 00 00 00</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Adresse</h3>
                            <p class="text-gray-600">Abidjan, Côte d'Ivoire</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Horaires</h3>
                            <p class="text-gray-600">Lun–Ven, 8h–18h (GMT)</p>
                        </div>
                    </div>
                </div>

                <div class="mt-10 p-6 bg-primary-50 rounded-2xl">
                    <h3 class="font-semibold text-gray-900 mb-2">Support prioritaire</h3>
                    <p class="text-sm text-gray-600">Les membres Premium et Diamant bénéficient d'un support prioritaire avec réponse garantie en moins de 2 heures.</p>
                </div>
            </div>

            {{-- Contact Form --}}
            <div>
                <h2 class="text-2xl font-serif font-bold text-gray-900 mb-8">Envoyer un message</h2>

                @if(session('success'))
                <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6">
                    {{ session('success') }}
                </div>
                @endif

                <form method="POST" action="{{ route('contact.send') }}" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nom complet</label>
                        <input type="text" id="name" name="name" placeholder="Votre nom" value="{{ old('name') }}" class="w-full rounded-lg border-gray-300 focus:border-primary-500 focus:ring-primary-500" required>
                        @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" id="email" name="email" placeholder="vous@exemple.fr" value="{{ old('email') }}" class="w-full rounded-lg border-gray-300 focus:border-primary-500 focus:ring-primary-500" required>
                        @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Sujet</label>
                        <select id="subject" name="subject" class="w-full rounded-lg border-gray-300 focus:border-primary-500 focus:ring-primary-500">
                            <option value="question">Question générale</option>
                            <option value="compte">Mon compte</option>
                            <option value="abonnement">Abonnement & paiement</option>
                            <option value="signalement">Signaler un profil</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                        <textarea id="message" name="message" rows="5" placeholder="Décrivez votre demande…" class="w-full rounded-lg border-gray-300 focus:border-primary-500 focus:ring-primary-500" required>{{ old('message') }}</textarea>
                        @error('message') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit" class="btn-primary w-full">Envoyer le message</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
