@extends('layouts.app')

@section('title', 'Les profils - MyDarlinng')

@section('content')
{{-- Hero --}}
<section class="relative py-24 overflow-hidden">
    <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?w=1600&q=80" alt="Couple" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative z-10 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-serif font-bold text-white mb-4">
            Trouvez votre<br>
            <span class="italic text-primary-300">correspondance idéale</span>
        </h1>
        <p class="text-lg text-gray-200">
            Parcourez des profils vérifiés et utilisez nos filtres avancés pour trouver quelqu'un qui partage vos valeurs.
        </p>
    </div>
</section>

@auth
    {{-- Search Filters --}}
    <section class="bg-white border-b border-gray-200 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <form class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Genre</label>
                    <select name="gender" class="w-full rounded-lg border-gray-300 text-sm">
                        <option value="">Tous</option>
                        <option value="homme">Homme</option>
                        <option value="femme">Femme</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Âge</label>
                    <select name="age" class="w-full rounded-lg border-gray-300 text-sm">
                        <option value="">Tous les âges</option>
                        <option value="18-25">18 - 25 ans</option>
                        <option value="25-30">25 - 30 ans</option>
                        <option value="30-40">30 - 40 ans</option>
                        <option value="40+">40+ ans</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Pays</label>
                    <select name="country" class="w-full rounded-lg border-gray-300 text-sm">
                        <option value="">Tous les pays</option>
                        <option value="CI">Côte d'Ivoire</option>
                        <option value="SN">Sénégal</option>
                        <option value="CM">Cameroun</option>
                        <option value="FR">France</option>
                        <option value="GH">Ghana</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Religion</label>
                    <select name="religion" class="w-full rounded-lg border-gray-300 text-sm">
                        <option value="">Toutes</option>
                        <option value="islam">Islam</option>
                        <option value="christianisme">Christianisme</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
                <div class="flex items-end">
                    <button type="submit" class="btn-primary w-full text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                        Rechercher
                    </button>
                </div>
            </form>
        </div>
    </section>

    {{-- Members Grid --}}
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($members ?? [] as $member)
                <div class="card group hover:shadow-lg transition-shadow">
                    <div class="relative overflow-hidden">
                        <img src="{{ $member->avatar ?? 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=400&q=80' }}" alt="{{ $member->pseudo }}" class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-3 right-3">
                            <span class="inline-flex items-center gap-1 bg-green-500 text-white text-xs px-2 py-1 rounded-full">
                                <span class="w-1.5 h-1.5 bg-white rounded-full"></span> En ligne
                            </span>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                            <h3 class="text-white font-semibold text-lg">{{ $member->pseudo }}, {{ $member->age ?? '?' }}</h3>
                            <p class="text-gray-200 text-sm">{{ $member->city ?? '' }}, {{ $member->country ?? '' }}</p>
                        </div>
                    </div>
                    <div class="p-4 flex justify-between items-center">
                        <button class="text-primary-600 hover:text-primary-800">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </button>
                        <button class="text-gray-400 hover:text-gray-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>

            @if(empty($members) || (isset($members) && count($members) === 0))
            <div class="text-center py-16">
                <p class="text-gray-500 text-lg">Aucun profil trouvé pour le moment. Revenez bientôt !</p>
            </div>
            @endif
        </div>
    </section>
@else
    {{-- Guest view --}}
    <section class="py-20">
        <div class="max-w-lg mx-auto px-4 text-center">
            <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-10 h-10 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                </svg>
            </div>
            <h2 class="text-2xl font-serif font-bold text-gray-900 mb-3">Accès réservé aux membres</h2>
            <p class="text-gray-600 mb-8">Inscrivez-vous gratuitement ou connectez-vous pour parcourir nos membres et entrer en contact.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('register') }}" class="btn-primary">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                    S'inscrire gratuitement
                </a>
                <a href="{{ route('login') }}" class="btn-secondary">Se connecter</a>
            </div>
            <p class="text-sm text-gray-400 mt-6">Inscription gratuite · Aucune carte requise · Annulez à tout moment</p>
        </div>
    </section>
@endauth
@endsection
