# MyDarlinng - Rencontres afro-authentiques

MyDarlinng est une plateforme de rencontres en ligne dédiée aux célibataires sincères à travers l'Afrique et la diaspora.

## Fonctionnalités

- **Page d'accueil** - Hero, statistiques, fonctionnalités, membres en vedette, témoignages, tarification
- **À propos** - Histoire, mission, valeurs, équipe fondatrice
- **Les profils** - Parcourir les membres (accès réservé aux inscrits) avec filtres avancés
- **Contact** - Formulaire de contact avec coordonnées
- **Inscription** - Création de compte en multi-étapes
- **Connexion** - Authentification email/mot de passe
- **Tarification** - 3 plans : Gratuit, Premium (19.99€/mois), Diamant (34.99€/mois)

## Stack technique

- **Backend** : Laravel 10 (PHP 8.1)
- **Frontend** : Blade + Tailwind CSS 3
- **Build** : Vite
- **Base de données** : SQLite (dev) / MySQL (production)

## Installation

```bash
# Cloner le repo
git clone <repo-url> mydarlinng
cd mydarlinng

# Installer les dépendances PHP
composer install

# Installer les dépendances Node
npm install

# Copier le fichier .env
cp .env.example .env
php artisan key:generate

# Configurer la base de données SQLite
touch database/database.sqlite

# Lancer les migrations et seeders
php artisan migrate --seed

# Compiler les assets
npm run build

# Lancer le serveur
php artisan serve
```

Le site sera accessible sur `http://localhost:8000`.

## Comptes de démonstration

Tous les comptes de démo utilisent le mot de passe : `password123`

| Pseudo   | Email                  | Ville    | Pays          |
|----------|------------------------|----------|---------------|
| Aminata  | aminata@example.com    | Abidjan  | Côte d'Ivoire |
| Fatou    | fatou@example.com      | Dakar    | Sénégal       |
| Kofi     | kofi@example.com       | Accra    | Ghana         |
| Amara    | amara@example.com      | Paris    | France        |
| Moussa   | moussa@example.com     | Douala   | Cameroun      |
| Awa      | awa@example.com        | Bamako   | Mali          |
| Yao      | yao@example.com        | Lomé     | Togo          |
| Mariame  | mariame@example.com    | Conakry  | Guinée        |

## Structure du projet

```
app/
├── Http/Controllers/
│   ├── AuthController.php      # Authentification
│   ├── ContactController.php   # Page de contact
│   └── PageController.php      # Pages statiques
├── Models/
│   ├── Contact.php             # Messages de contact
│   └── User.php                # Utilisateurs/membres
resources/
├── css/app.css                 # Styles Tailwind
├── views/
│   ├── layouts/app.blade.php   # Layout principal
│   ├── partials/               # Header, footer
│   ├── auth/                   # Login, register
│   ├── home.blade.php          # Page d'accueil
│   ├── about.blade.php         # À propos
│   ├── browse.blade.php        # Parcourir les profils
│   ├── contact.blade.php       # Contact
│   └── pricing.blade.php       # Tarification
routes/
└── web.php                     # Routes web
```

## Licence

© 2026 MyDarlinng. Tous droits réservés.
