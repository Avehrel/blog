<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $members = [
            ['pseudo' => 'Aminata', 'name' => 'Aminata K.', 'email' => 'aminata@example.com', 'gender' => 'femme', 'age' => 28, 'city' => 'Abidjan', 'country' => 'Côte d\'Ivoire', 'religion' => 'Islam', 'bio' => 'Passionnée de voyage et de cuisine africaine. Je cherche quelqu\'un de sincère et ambitieux.', 'avatar' => 'https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=400&q=80'],
            ['pseudo' => 'Fatou', 'name' => 'Fatou D.', 'email' => 'fatou@example.com', 'gender' => 'femme', 'age' => 25, 'city' => 'Dakar', 'country' => 'Sénégal', 'religion' => 'Islam', 'bio' => 'Entrepreneure dans le cœur, amoureuse dans l\'âme.', 'avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=400&q=80'],
            ['pseudo' => 'Kofi', 'name' => 'Kofi M.', 'email' => 'kofi@example.com', 'gender' => 'homme', 'age' => 31, 'city' => 'Accra', 'country' => 'Ghana', 'religion' => 'Christianisme', 'bio' => 'Ingénieur logiciel, fan de football et de bonne musique.', 'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&q=80'],
            ['pseudo' => 'Amara', 'name' => 'Amara S.', 'email' => 'amara@example.com', 'gender' => 'femme', 'age' => 27, 'city' => 'Paris', 'country' => 'France', 'religion' => 'Christianisme', 'bio' => 'Médecin, passionnée par les arts et la culture.', 'avatar' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?w=400&q=80'],
            ['pseudo' => 'Moussa', 'name' => 'Moussa B.', 'email' => 'moussa@example.com', 'gender' => 'homme', 'age' => 33, 'city' => 'Douala', 'country' => 'Cameroun', 'religion' => 'Islam', 'bio' => 'Architecte de profession, poète de cœur.', 'avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&q=80'],
            ['pseudo' => 'Awa', 'name' => 'Awa T.', 'email' => 'awa@example.com', 'gender' => 'femme', 'age' => 24, 'city' => 'Bamako', 'country' => 'Mali', 'religion' => 'Islam', 'bio' => 'Étudiante en droit, j\'aime la danse et les belles discussions.', 'avatar' => 'https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?w=400&q=80'],
            ['pseudo' => 'Yao', 'name' => 'Yao K.', 'email' => 'yao@example.com', 'gender' => 'homme', 'age' => 29, 'city' => 'Lomé', 'country' => 'Togo', 'religion' => 'Christianisme', 'bio' => 'Entrepreneur tech, je cherche une partenaire ambitieuse.', 'avatar' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=400&q=80'],
            ['pseudo' => 'Mariame', 'name' => 'Mariame C.', 'email' => 'mariame@example.com', 'gender' => 'femme', 'age' => 26, 'city' => 'Conakry', 'country' => 'Guinée', 'religion' => 'Islam', 'bio' => 'Journaliste, grande voyageuse. La vie est une aventure !', 'avatar' => 'https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?w=400&q=80'],
        ];

        foreach ($members as $member) {
            User::create(array_merge($member, [
                'password' => Hash::make('password123'),
            ]));
        }
    }
}
