-- =============================================
-- MyDarlinng - Base de données MySQL
-- =============================================
-- 1. Créez une base "mydarlinng" dans phpMyAdmin
-- 2. Sélectionnez la base "mydarlinng"
-- 3. Allez dans l'onglet "Importer"
-- 4. Choisissez ce fichier et cliquez "Exécuter"
-- =============================================

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
SET NAMES utf8mb4;

-- --------------------------------------------------------
-- Table `users`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('homme','femme') DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `ethnicity` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `plan` enum('gratuit','premium','diamant') NOT NULL DEFAULT 'gratuit',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_pseudo_unique` (`pseudo`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table `password_reset_tokens`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table `failed_jobs`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table `personal_access_tokens`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table `contacts`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table `migrations`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_reset_tokens_table', 1),
('2019_08_19_000000_create_failed_jobs_table', 1),
('2019_12_14_000001_create_personal_access_tokens_table', 1),
('2024_01_01_000000_create_contacts_table', 1);

-- --------------------------------------------------------
-- Données de démonstration (mot de passe : password123)
-- --------------------------------------------------------

INSERT INTO `users` (`name`, `pseudo`, `email`, `password`, `gender`, `age`, `city`, `country`, `religion`, `bio`, `avatar`, `plan`, `created_at`, `updated_at`) VALUES
('Aminata K.', 'Aminata', 'aminata@example.com', '$2y$10$602Oy8fvqE4QvoFea3yWDOF6un6BIwz5Gq/bfmBwCw6Mj273cvcv.', 'femme', 28, 'Abidjan', 'Côte d\'Ivoire', 'Islam', 'Passionnée de voyage et de cuisine africaine. Je cherche quelqu\'un de sincère et ambitieux.', 'https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=400&q=80', 'gratuit', NOW(), NOW()),
('Fatou D.', 'Fatou', 'fatou@example.com', '$2y$10$602Oy8fvqE4QvoFea3yWDOF6un6BIwz5Gq/bfmBwCw6Mj273cvcv.', 'femme', 25, 'Dakar', 'Sénégal', 'Islam', 'Entrepreneure dans le cœur, amoureuse dans l\'âme.', 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=400&q=80', 'gratuit', NOW(), NOW()),
('Kofi M.', 'Kofi', 'kofi@example.com', '$2y$10$602Oy8fvqE4QvoFea3yWDOF6un6BIwz5Gq/bfmBwCw6Mj273cvcv.', 'homme', 31, 'Accra', 'Ghana', 'Christianisme', 'Ingénieur logiciel, fan de football et de bonne musique.', 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&q=80', 'gratuit', NOW(), NOW()),
('Amara S.', 'Amara', 'amara@example.com', '$2y$10$602Oy8fvqE4QvoFea3yWDOF6un6BIwz5Gq/bfmBwCw6Mj273cvcv.', 'femme', 27, 'Paris', 'France', 'Christianisme', 'Médecin, passionnée par les arts et la culture.', 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?w=400&q=80', 'gratuit', NOW(), NOW()),
('Moussa B.', 'Moussa', 'moussa@example.com', '$2y$10$602Oy8fvqE4QvoFea3yWDOF6un6BIwz5Gq/bfmBwCw6Mj273cvcv.', 'homme', 33, 'Douala', 'Cameroun', 'Islam', 'Architecte de profession, poète de cœur.', 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&q=80', 'gratuit', NOW(), NOW()),
('Awa T.', 'Awa', 'awa@example.com', '$2y$10$602Oy8fvqE4QvoFea3yWDOF6un6BIwz5Gq/bfmBwCw6Mj273cvcv.', 'femme', 24, 'Bamako', 'Mali', 'Islam', 'Étudiante en droit, j\'aime la danse et les belles discussions.', 'https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?w=400&q=80', 'gratuit', NOW(), NOW()),
('Yao K.', 'Yao', 'yao@example.com', '$2y$10$602Oy8fvqE4QvoFea3yWDOF6un6BIwz5Gq/bfmBwCw6Mj273cvcv.', 'homme', 29, 'Lomé', 'Togo', 'Christianisme', 'Entrepreneur tech, je cherche une partenaire ambitieuse.', 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=400&q=80', 'gratuit', NOW(), NOW()),
('Mariame C.', 'Mariame', 'mariame@example.com', '$2y$10$602Oy8fvqE4QvoFea3yWDOF6un6BIwz5Gq/bfmBwCw6Mj273cvcv.', 'femme', 26, 'Conakry', 'Guinée', 'Islam', 'Journaliste, grande voyageuse. La vie est une aventure !', 'https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?w=400&q=80', 'gratuit', NOW(), NOW());
