<header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-sm border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <svg class="w-8 h-8 text-primary-700" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
                <span class="text-xl font-serif font-bold text-primary-800">MyDarlinng</span>
            </a>

            {{-- Navigation --}}
            <nav class="hidden md:flex items-center gap-6">
                <a href="{{ route('home') }}" class="text-sm font-medium {{ request()->routeIs('home') ? 'text-primary-700' : 'text-gray-600 hover:text-gray-900' }} transition-colors">Accueil</a>
                <a href="{{ route('about') }}" class="text-sm font-medium {{ request()->routeIs('about') ? 'text-primary-700' : 'text-gray-600 hover:text-gray-900' }} transition-colors">À propos</a>
                <a href="{{ route('browse') }}" class="text-sm font-medium {{ request()->routeIs('browse') ? 'text-primary-700' : 'text-gray-600 hover:text-gray-900' }} transition-colors">Les profils</a>
                <a href="{{ route('contact') }}" class="text-sm font-medium {{ request()->routeIs('contact') ? 'text-primary-700' : 'text-gray-600 hover:text-gray-900' }} transition-colors">Contact</a>
            </nav>

            {{-- Auth buttons --}}
            <div class="flex items-center gap-3">
                @auth
                    <a href="{{ route('browse') }}" class="text-sm font-medium text-gray-600 hover:text-gray-900">Mon profil</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm font-medium text-gray-600 hover:text-gray-900">Déconnexion</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-medium text-gray-600 hover:text-gray-900">Connexion</a>
                    <a href="{{ route('register') }}" class="btn-primary text-sm !py-2 !px-4">S'inscrire</a>
                @endauth

                {{-- Mobile menu button --}}
                <button type="button" class="md:hidden p-2 text-gray-600" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile menu --}}
        <div id="mobile-menu" class="hidden md:hidden pb-4">
            <nav class="flex flex-col gap-2">
                <a href="{{ route('home') }}" class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg">Accueil</a>
                <a href="{{ route('about') }}" class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg">À propos</a>
                <a href="{{ route('browse') }}" class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg">Les profils</a>
                <a href="{{ route('contact') }}" class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg">Contact</a>
            </nav>
        </div>
    </div>
</header>
<div class="h-16"></div>
