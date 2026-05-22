@extends('layouts.app')

@section('title', 'Inscription - MyDarlinng')

@section('content')
<section class="min-h-[80vh] flex">
    {{-- Left panel with image --}}
    <div class="hidden md:flex md:w-2/5 relative overflow-hidden items-end">
        <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?w=800&q=80" alt="Couple" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
        <div class="relative z-10 p-8 text-white">
            <h2 class="text-2xl font-serif font-bold mb-2">Votre histoire commence ici</h2>
            <p class="text-gray-200 text-sm">Rejoignez des milliers de célibataires sincères à travers l'Afrique et la diaspora.</p>
        </div>
    </div>

    {{-- Form --}}
    <div class="w-full md:w-3/5 flex items-center justify-center p-8 md:p-16">
        <div class="w-full max-w-lg">
            <h1 class="text-3xl font-serif font-bold text-gray-900 mb-2">Créer mon profil</h1>
            <p class="text-gray-600 mb-2">Étape 1 sur 5 — Compte</p>

            {{-- Progress bar --}}
            <div class="flex gap-2 mb-8">
                <div class="flex-1 h-1 rounded-full bg-primary-600"></div>
                <div class="flex-1 h-1 rounded-full bg-gray-200"></div>
                <div class="flex-1 h-1 rounded-full bg-gray-200"></div>
                <div class="flex-1 h-1 rounded-full bg-gray-200"></div>
                <div class="flex-1 h-1 rounded-full bg-gray-200"></div>
            </div>

            @if($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6">
                @foreach($errors->all() as $error)
                    <p class="text-sm">{{ $error }}</p>
                @endforeach
            </div>
            @endif

            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf
                <div>
                    <label for="pseudo" class="block text-sm font-medium text-gray-700 mb-1">Pseudo <span class="text-red-500">*</span></label>
                    <input type="text" id="pseudo" name="pseudo" value="{{ old('pseudo') }}" placeholder="Votre pseudo affiché publiquement" class="w-full rounded-lg border-gray-300 focus:border-primary-500 focus:ring-primary-500" required>
                    <p class="text-xs text-gray-500 mt-1">Seul votre pseudo sera visible par les autres membres</p>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email <span class="text-red-500">*</span></label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="vous@exemple.fr" class="w-full rounded-lg border-gray-300 focus:border-primary-500 focus:ring-primary-500" required>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe <span class="text-red-500">*</span></label>
                    <input type="password" id="password" name="password" placeholder="Minimum 8 caractères" class="w-full rounded-lg border-gray-300 focus:border-primary-500 focus:ring-primary-500" required>
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirmer le mot de passe</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="••••••••" class="w-full rounded-lg border-gray-300 focus:border-primary-500 focus:ring-primary-500" required>
                </div>

                <button type="submit" class="btn-primary w-full">
                    Continuer
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </form>

            <p class="text-center text-sm text-gray-600 mt-6">
                Déjà membre ? <a href="{{ route('login') }}" class="text-primary-700 font-semibold hover:underline">Se connecter</a>
            </p>
        </div>
    </div>
</section>
@endsection
