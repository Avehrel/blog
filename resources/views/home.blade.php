@extends('layouts.app')

@section('title', 'MyDarlinng - Trouvez l\'amour qui vous mérite')

@section('content')
{{-- Hero Section --}}
<section class="relative min-h-[85vh] flex items-center overflow-hidden">
    <img src="https://images.unsplash.com/photo-1516589178581-6cd7833ae3b2?w=1600&q=80" alt="Couple heureux" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/40 to-transparent"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="max-w-xl">
            <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm rounded-full px-4 py-1.5 mb-6">
                <svg class="w-4 h-4 text-primary-300" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
                <span class="text-white text-sm font-medium">Rencontres afro-authentiques</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-serif font-bold text-white leading-tight mb-6">
                Trouvez l'amour<br>
                <span class="italic text-primary-300">qui vous mérite.</span>
            </h1>
            <p class="text-lg text-gray-200 mb-8 leading-relaxed">
                MyDarlinng réunit des célibataires sincères à travers l'Afrique et la diaspora, prêts pour une relation véritable et durable.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('register') }}" class="btn-primary text-base">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                    Commencer gratuitement
                </a>
                <a href="{{ route('browse') }}" class="btn-secondary text-base">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    Explorer les profils
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Stats Section --}}
<section class="bg-white py-12 border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-3xl md:text-4xl font-bold text-primary-700">8 000+</div>
                <div class="text-sm text-gray-500 mt-1">Membres actifs</div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold text-primary-700">315</div>
                <div class="text-sm text-gray-500 mt-1">Matchs aujourd'hui</div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold text-primary-700">47</div>
                <div class="text-sm text-gray-500 mt-1">Pays représentés</div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold text-primary-700">12 834+</div>
                <div class="text-sm text-gray-500 mt-1">Belles histoires</div>
            </div>
        </div>
    </div>
</section>

{{-- Features Section --}}
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div>
                <p class="section-subtitle">L'expérience MyDarlinng</p>
                <h2 class="section-title mb-6">Des rencontres pensées pour vous</h2>
                <p class="text-gray-600 mb-8 leading-relaxed">
                    Notre plateforme propose des profils vérifiés, des filtres de recherche culturels (ethnie, religion, langue…) et une messagerie sécurisée pour des connexions authentiques.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-center gap-3">
                        <svg class="w-6 h-6 text-primary-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-gray-700">Profils vérifiés et modérés</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-6 h-6 text-primary-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-gray-700">Filtres de recherche culturels avancés</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-6 h-6 text-primary-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-gray-700">Messagerie privée sécurisée</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-6 h-6 text-primary-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-gray-700">Algorithme de matching intelligent</span>
                    </li>
                </ul>
            </div>
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?w=600&q=80" alt="App preview" class="rounded-2xl shadow-2xl">
            </div>
        </div>
    </div>
</section>

{{-- Featured Members --}}
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="section-title mb-4">Membres en vedette</h2>
        <p class="text-gray-600 mb-12">Des profils authentiques et vérifiés qui attendent de vous rencontrer</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            @foreach([
                ['name' => 'Aminata', 'age' => 28, 'city' => 'Abidjan', 'img' => 'https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=400&q=80'],
                ['name' => 'Fatou', 'age' => 25, 'city' => 'Dakar', 'img' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=400&q=80'],
                ['name' => 'Kofi', 'age' => 31, 'city' => 'Accra', 'img' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&q=80'],
                ['name' => 'Amara', 'age' => 27, 'city' => 'Paris', 'img' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?w=400&q=80'],
            ] as $member)
            <div class="card group hover:shadow-lg transition-shadow">
                <div class="relative overflow-hidden">
                    <img src="{{ $member['img'] }}" alt="{{ $member['name'] }}" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4">
                        <h3 class="text-white font-semibold">{{ $member['name'] }}, {{ $member['age'] }}</h3>
                        <p class="text-gray-200 text-sm">{{ $member['city'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a href="{{ route('browse') }}" class="btn-outline">Voir tous les membres</a>
    </div>
</section>

{{-- CTA Banner --}}
<section class="relative py-24 overflow-hidden">
    <img src="https://images.unsplash.com/photo-1516589178581-6cd7833ae3b2?w=1200&q=80" alt="Couple" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-primary-900/70"></div>
    <div class="relative z-10 max-w-3xl mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-serif font-bold text-white mb-6">Votre histoire d'amour commence ici</h2>
        <p class="text-lg text-primary-100 mb-8">Rejoignez MyDarlinng et trouvez la personne qui partage vos valeurs, votre culture et vos rêves.</p>
        <a href="{{ route('register') }}" class="btn-primary bg-white !text-primary-700 hover:!bg-gray-100 text-base">Créer mon profil gratuitement</a>
    </div>
</section>

{{-- How it works --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="section-title mb-4">Comment ça marche ?</h2>
        <p class="text-gray-600 mb-16">Trois étapes simples pour trouver votre âme sœur</p>

        <div class="grid md:grid-cols-3 gap-12">
            <div>
                <div class="text-5xl font-serif font-bold text-primary-200 mb-4">01</div>
                <h3 class="text-xl font-semibold mb-3">Créez votre profil</h3>
                <p class="text-gray-600">Inscrivez-vous gratuitement et complétez votre profil avec votre photo, votre présentation et vos critères de recherche.</p>
            </div>
            <div>
                <div class="text-5xl font-serif font-bold text-primary-200 mb-4">02</div>
                <h3 class="text-xl font-semibold mb-3">Recherchez &amp; filtrez</h3>
                <p class="text-gray-600">Utilisez nos filtres avancés (pays, ethnie, religion, langue…) pour trouver des profils compatibles avec vos valeurs.</p>
            </div>
            <div>
                <div class="text-5xl font-serif font-bold text-primary-200 mb-4">03</div>
                <h3 class="text-xl font-semibold mb-3">Entrez en contact</h3>
                <p class="text-gray-600">Envoyez un message, échangez et prenez rendez-vous. L'amour vous attend sur MyDarlinng.</p>
            </div>
        </div>
    </div>
</section>

{{-- Testimonials --}}
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="section-title mb-4">Ils ont trouvé l'amour</h2>
        <p class="text-gray-600 mb-12">Des histoires vraies de couples formés sur MyDarlinng</p>

        <div class="grid md:grid-cols-3 gap-8">
            @foreach([
                ['quote' => 'Nous nous sommes rencontrés sur MyDarlinng il y a deux ans. Au premier message, j\'ai su qu\'il y avait quelque chose de spécial. Aujourd\'hui nous sommes fiancés et infiniment heureux !', 'name' => 'Marie & Pierre', 'info' => '29 ans · Paris, France', 'img' => 'https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?w=100&q=80'],
                ['quote' => 'J\'avais presque abandonné l\'idée de trouver l\'amour en ligne, puis j\'ai créé mon profil sur MyDarlinng. Six mois plus tard, je rencontrais mon âme sœur. C\'est magique !', 'name' => 'Claire & Julien', 'info' => '32 ans · Lyon, France', 'img' => 'https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=100&q=80'],
                ['quote' => 'MyDarlinng m\'a redonné confiance en l\'amour. Le système de matching est vraiment efficace et la communauté est bienveillante. Je ne pouvais pas rêver mieux !', 'name' => 'Isabelle & Marc', 'info' => '35 ans · Bordeaux, France', 'img' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?w=100&q=80'],
            ] as $testimonial)
            <div class="card p-8 text-left">
                <div class="flex gap-1 mb-4">
                    @for($i = 0; $i < 5; $i++)
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    @endfor
                </div>
                <blockquote class="text-gray-600 text-sm leading-relaxed mb-6">"{{ $testimonial['quote'] }}"</blockquote>
                <div class="flex items-center gap-3">
                    <img src="{{ $testimonial['img'] }}" alt="{{ $testimonial['name'] }}" class="w-12 h-12 rounded-full object-cover">
                    <div>
                        <div class="font-semibold text-gray-900 text-sm">{{ $testimonial['name'] }}</div>
                        <div class="text-gray-500 text-xs">{{ $testimonial['info'] }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Pricing Preview --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="section-title mb-4">Nos abonnements</h2>
        <p class="text-gray-600 mb-12">Choisissez le plan qui vous correspond</p>

        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            {{-- Gratuit --}}
            <div class="card p-8 text-left">
                <h3 class="text-lg font-semibold mb-2">Gratuit</h3>
                <div class="text-3xl font-bold text-gray-900 mb-6">Gratuit</div>
                <ul class="space-y-3 mb-8">
                    @foreach(['Créer un profil', 'Parcourir les membres', '5 messages par jour', 'Voir qui vous a aimé'] as $feature)
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-primary-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        {{ $feature }}
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('register') }}" class="btn-secondary w-full">S'inscrire</a>
            </div>

            {{-- Premium --}}
            <div class="card p-8 text-left border-2 border-primary-600 relative">
                <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-primary-600 text-white text-xs font-semibold px-3 py-1 rounded-full flex items-center gap-1">
                    <svg class="w-3 h-3" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                    Le plus populaire
                </div>
                <h3 class="text-lg font-semibold mb-2">Premium</h3>
                <div class="text-3xl font-bold text-gray-900 mb-6">19.99€<span class="text-base font-normal text-gray-500"> /mois</span></div>
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
                <h3 class="text-lg font-semibold mb-2">Diamant</h3>
                <div class="text-3xl font-bold text-gray-900 mb-6">34.99€<span class="text-base font-normal text-gray-500"> /mois</span></div>
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
    </div>
</section>
@endsection
