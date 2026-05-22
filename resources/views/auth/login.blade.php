@extends('layouts.app')

@section('title', 'Connexion - MyDarlinng')

@section('content')
<section class="min-h-[80vh] flex">
    {{-- Form --}}
    <div class="w-full md:w-1/2 flex items-center justify-center p-8 md:p-16">
        <div class="w-full max-w-md">
            <h1 class="text-3xl font-serif font-bold text-gray-900 mb-2">Bon retour</h1>
            <p class="text-gray-600 mb-8">Connectez-vous pour retrouver vos matchs</p>

            @if(session('status'))
            <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6">
                {{ session('status') }}
            </div>
            @endif

            @if($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Adresse email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="vous@exemple.fr" class="w-full rounded-lg border-gray-300 focus:border-primary-500 focus:ring-primary-500" required autofocus>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" class="w-full rounded-lg border-gray-300 focus:border-primary-500 focus:ring-primary-500" required>
                </div>

                <button type="submit" class="btn-primary w-full">Se connecter</button>
            </form>

            <p class="text-center text-sm text-gray-600 mt-6">
                Pas encore membre ? <a href="{{ route('register') }}" class="text-primary-700 font-semibold hover:underline">Inscrivez-vous gratuitement</a>
            </p>
        </div>
    </div>

    {{-- Right panel --}}
    <div class="hidden md:flex md:w-1/2 bg-gradient-to-br from-primary-100 to-primary-200 items-center justify-center p-16">
        <div class="text-center max-w-md">
            <blockquote class="text-xl font-serif italic text-primary-800 mb-4">
                "L'amour véritable commence quand rien n'est attendu en retour."
            </blockquote>
            <p class="text-primary-600">— Antoine de Saint-Exupéry</p>
        </div>
    </div>
</section>
@endsection
