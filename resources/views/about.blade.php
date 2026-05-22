@extends('layouts.app')

@section('title', 'À propos - MyDarlinng')

@section('content')
{{-- Hero --}}
<section class="relative py-24 overflow-hidden">
    <img src="https://images.unsplash.com/photo-1516589178581-6cd7833ae3b2?w=1600&q=80" alt="Couple" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative z-10 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-2 mb-4">
            <svg class="w-6 h-6 text-primary-400" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
            </svg>
        </div>
        <h1 class="text-4xl md:text-5xl font-serif font-bold text-white italic mb-4">Notre histoire</h1>
        <p class="text-lg text-gray-200 leading-relaxed">
            MyDarlinng est né d'une idée simple : créer un espace où les rencontres sont authentiques, bienveillantes et porteuses d'espoir — pensé pour l'Afrique et sa diaspora.
        </p>
    </div>
</section>

{{-- Mission & Stats --}}
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="section-title mb-6">Notre mission</h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Chez MyDarlinng, nous pensons que l'amour ne devrait pas être une affaire de hasard. Nous combinons technologie intelligente et expérience humaine pour vous aider à rencontrer des personnes qui partagent vraiment vos valeurs et vos aspirations.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Plus de <strong>12 000 couples</strong> se sont formés grâce à notre plateforme. Chaque jour, nous contribuons à de nouvelles histoires d'amour à travers l'Afrique, l'Europe et la diaspora mondiale.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-8">
                <div class="text-center p-6 rounded-2xl bg-primary-50">
                    <div class="text-4xl font-bold text-primary-700">8 000+</div>
                    <div class="text-gray-600 mt-1">Membres actifs</div>
                </div>
                <div class="text-center p-6 rounded-2xl bg-primary-50">
                    <div class="text-4xl font-bold text-primary-700">47</div>
                    <div class="text-gray-600 mt-1">Pays représentés</div>
                </div>
                <div class="text-center p-6 rounded-2xl bg-primary-50">
                    <div class="text-4xl font-bold text-primary-700">12 834</div>
                    <div class="text-gray-600 mt-1">Histoires d'amour</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Values --}}
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="section-title mb-4">Nos valeurs</h2>
        <p class="text-gray-600 mb-12">Ce qui nous guide chaque jour dans la construction de MyDarlinng.</p>

        <div class="grid md:grid-cols-3 gap-8">
            @foreach([
                ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'title' => 'Authenticité', 'desc' => 'Nous valorisons les profils réels et les intentions sincères. Chaque membre est vérifié pour garantir des rencontres authentiques.'],
                ['icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z', 'title' => 'Bienveillance', 'desc' => 'Notre communauté est fondée sur le respect mutuel, la tolérance et la bienveillance envers tous les membres.'],
                ['icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Diversité culturelle', 'desc' => 'Nous célébrons la richesse culturelle de l\'Afrique et de sa diaspora à travers nos filtres et fonctionnalités uniques.'],
            ] as $value)
            <div class="card p-8 text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $value['icon'] }}"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-3">{{ $value['title'] }}</h3>
                <p class="text-gray-600 text-sm leading-relaxed">{{ $value['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Team --}}
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="section-title mb-4">L'équipe fondatrice</h2>
        <p class="text-gray-600 mb-12">Des passionnés convaincus que la technologie peut servir l'amour.</p>

        <div class="grid md:grid-cols-3 gap-8 max-w-3xl mx-auto">
            @foreach([
                ['name' => 'Kouamé A.', 'role' => 'CEO & Fondateur', 'img' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&q=80'],
                ['name' => 'Aïcha D.', 'role' => 'CTO', 'img' => 'https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=200&q=80'],
                ['name' => 'Jean-Marc K.', 'role' => 'Head of Product', 'img' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200&q=80'],
            ] as $member)
            <div class="text-center">
                <img src="{{ $member['img'] }}" alt="{{ $member['name'] }}" class="w-32 h-32 rounded-full object-cover mx-auto mb-4">
                <h3 class="font-semibold text-gray-900">{{ $member['name'] }}</h3>
                <p class="text-sm text-gray-500">{{ $member['role'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-primary-700 text-center">
    <div class="max-w-3xl mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-serif font-bold text-white mb-4">Prêt à écrire votre histoire ?</h2>
        <p class="text-primary-100 text-lg mb-8">Rejoignez des milliers de célibataires qui ont trouvé l'amour sur MyDarlinng.</p>
        <a href="{{ route('register') }}" class="btn-primary bg-white !text-primary-700 hover:!bg-gray-100 text-base">Commencer gratuitement</a>
    </div>
</section>
@endsection
