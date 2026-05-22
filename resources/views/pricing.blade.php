@extends('layouts.app')

@section('title', 'Abonnements - MyDarlinng')

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-serif font-bold text-gray-900 mb-4">Choisissez votre abonnement</h1>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-16">
            Investissez dans votre bonheur. Commencez gratuitement, évoluez quand vous êtes prêt.
        </p>

        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            {{-- Gratuit --}}
            <div class="card p-8 text-left">
                <h3 class="text-lg font-semibold text-gray-900 mb-1">Gratuit</h3>
                <div class="text-4xl font-bold text-gray-900 mb-6">Gratuit</div>
                <ul class="space-y-3 mb-8">
                    @foreach(['Créer un profil', 'Parcourir les membres', '5 messages par jour', 'Voir qui vous a aimé'] as $feature)
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-primary-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        {{ $feature }}
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('register') }}" class="btn-secondary w-full">Commencer gratuitement</a>
            </div>

            {{-- Premium --}}
            <div class="card p-8 text-left border-2 border-primary-600 relative">
                <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-primary-600 text-white text-xs font-semibold px-3 py-1 rounded-full flex items-center gap-1">
                    <svg class="w-3 h-3" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                    Le plus populaire
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-1">Premium</h3>
                <div class="mb-6">
                    <span class="text-4xl font-bold text-gray-900">19.99€</span>
                    <span class="text-gray-500">/ mois</span>
                </div>
                <ul class="space-y-3 mb-8">
                    @foreach(['Tout du plan Gratuit', 'Messages illimités', 'Voir qui a visité votre profil', 'Mode incognito', 'Boost de profil mensuel', 'Filtres de recherche avancés'] as $feature)
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-primary-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        {{ $feature }}
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('register') }}" class="btn-primary w-full">Choisir ce plan</a>
            </div>

            {{-- Diamant --}}
            <div class="card p-8 text-left">
                <h3 class="text-lg font-semibold text-gray-900 mb-1">Diamant</h3>
                <div class="mb-6">
                    <span class="text-4xl font-bold text-gray-900">34.99€</span>
                    <span class="text-gray-500">/ mois</span>
                </div>
                <ul class="space-y-3 mb-8">
                    @foreach(['Tout du plan Premium', 'Profil en vedette', '5 boosts par mois', 'Priorité dans les résultats de recherche', 'Badge Diamant exclusif', 'Support prioritaire 24/7'] as $feature)
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-primary-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        {{ $feature }}
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('register') }}" class="btn-outline w-full">Choisir ce plan</a>
            </div>
        </div>

        {{-- Guarantee --}}
        <div class="mt-16 max-w-2xl mx-auto">
            <div class="bg-gray-50 rounded-2xl p-8 text-center">
                <h3 class="text-xl font-serif font-bold text-gray-900 mb-2">Satisfait ou remboursé</h3>
                <p class="text-gray-600">Essayez Premium pendant 14 jours. Si vous n'êtes pas satisfait, nous vous remboursons intégralement — sans question.</p>
            </div>
        </div>
    </div>
</section>
@endsection
