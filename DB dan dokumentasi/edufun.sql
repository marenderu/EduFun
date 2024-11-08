-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2024 at 06:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edufun`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `writer_id` bigint(20) UNSIGNED NOT NULL,
  `image_link` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `writer_id`, `image_link`, `category`, `title`, `content`, `views`, `created_at`, `updated_at`) VALUES
(1, 3, 'article-img/img1.jpg', 'Network-Security', 'Voluptatibus doloribus blanditiis nobis consequuntur.', 'Est ut nihil qui et et magni veniam quae. Similique molestiae quia ut doloremque consequatur dolorum consequatur et. Ut corrupti corrupti delectus expedita quis delectus laudantium.\n\nOmnis placeat reiciendis accusamus ipsa. Voluptatem ipsam animi sapiente. Exercitationem aut nemo sit sint sint. In et veniam quasi dolores inventore sint veritatis.\n\nInventore et nostrum sit fugiat aut. Id id qui nihil quam consequatur. Ea consequatur id repellendus enim saepe blanditiis. Provident expedita blanditiis vel impedit libero laborum et.', 0, '2024-11-06 09:24:10', '2024-11-06 09:24:10'),
(2, 3, 'article-img/img2.jpg', 'Network-Security', 'Aut recusandae optio consequuntur dolorem.', 'Distinctio cumque incidunt eos id qui nam occaecati. Eaque dolor facilis dicta unde dicta error. Quis consequatur aliquid occaecati iusto.\n\nUllam quibusdam sunt ad possimus non. Qui ex commodi dolorem dolores praesentium et reiciendis assumenda. Reprehenderit fugit sed sint ab eveniet ratione. Incidunt et sunt quia sit optio.\n\nVoluptas sit incidunt laboriosam nostrum qui. Officia vel sed architecto voluptates voluptatem est beatae. Ad officia quod ducimus.', 0, '2024-11-06 09:24:10', '2024-11-06 09:24:10'),
(3, 1, 'article-img/img3.jpg', 'Network-Security', 'Velit nam ducimus dolorem.', 'Fuga dolor et et ut aut doloremque quos. Molestias qui minus minus dolorem repellendus et. Id magnam atque aut pariatur ut ut est.\n\nBlanditiis ea culpa eum facilis et quis. Consequatur nihil veritatis veritatis qui animi. Ea quos ad consequatur ducimus. Quasi fugiat modi eum harum doloremque consequatur deleniti.\n\nAsperiores dicta unde ut at. Magnam alias maxime debitis sed non et.', 0, '2024-11-06 09:24:10', '2024-11-06 09:24:10'),
(4, 2, 'article-img/img4.jpg', 'Data-Science', 'Odio odio id quas.', 'Voluptas dolore aut aut suscipit ut velit maiores. Dolorem repellendus sunt veniam sequi ea officia iure. In magni blanditiis enim accusantium similique quia.\n\nAut ut quis quia voluptate. Magni voluptatum natus rerum fugiat temporibus. Natus officiis consectetur fugiat molestiae molestiae aperiam.\n\nVoluptatem natus possimus perspiciatis fugit laborum quae quasi in. Facere velit illo explicabo nostrum velit amet laudantium. Maiores nostrum beatae impedit qui.', 0, '2024-11-06 09:24:10', '2024-11-06 09:24:10'),
(5, 2, 'article-img/img5.jpg', 'Network-Security', 'Animi accusantium quia est.', 'Quas quo dignissimos perspiciatis itaque harum consequatur. Architecto eius et ad quod quae. Dolorem quas earum minus omnis aliquid quas. Repudiandae veritatis minima aspernatur ipsam nesciunt.\n\nFugit rerum aperiam omnis ea asperiores. Voluptatem voluptas et tempore molestiae autem non eaque. In non eius eaque.\n\nRepellat ab maxime amet mollitia magni voluptatem. Rerum earum reprehenderit dolores saepe blanditiis in. Quis vero iste id minima sequi aut consequatur. Aut magni perferendis ut molestiae ad iusto consequatur.', 0, '2024-11-06 09:24:10', '2024-11-06 09:24:10'),
(6, 2, 'article-img/img6.jpg', 'Data-Science', 'Quae quis nihil placeat.', 'Inventore aut voluptate id consequatur at dolor natus. Qui optio sed est placeat quasi officiis adipisci est. Soluta ea nulla aut odio aperiam eum quia.\n\nBlanditiis ab sunt impedit omnis aut eligendi velit. Nihil tenetur molestiae deleniti. Consequatur consequatur suscipit et provident sapiente.\n\nIpsam saepe voluptatum qui nesciunt veritatis id aliquam aut. Itaque dolorum nostrum quaerat et dicta placeat. Maxime minus consectetur aperiam et ut vitae vero molestias.', 0, '2024-11-06 09:24:10', '2024-11-06 09:24:10');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_11_05_063502_create_writers_table', 1),
(5, '2024_11_05_065609_create_articles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('XtO1qyswvqnhUtMmMflbNJ7WPutcM8O22vIs8u5y', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib1dMVGtiVEhwTGNYc1FGVTk3ZW43ajdzRndETHlvU25lYUgzdWVLWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9DYXRlZ29yeS9EYXRhLVNjaWVuY2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1730915208);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

CREATE TABLE `writers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `writer_profile_picture_link` varchar(255) NOT NULL,
  `writer_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `writers`
--

INSERT INTO `writers` (`id`, `writer_profile_picture_link`, `writer_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'avatars/avatar1.jpg', 'Geraldine-O\'Kon-IV', 'Eum quisquam tempore officiis facere.', '2024-11-06 09:24:10', '2024-11-06 09:24:10'),
(2, 'avatars/avatar2.jpg', 'Jackeline-Brakus', 'Voluptatem illo repellat molestiae.', '2024-11-06 09:24:10', '2024-11-06 09:24:10'),
(3, 'avatars/avatar3.jpg', 'Quinton-Lehner', 'Voluptas aperiam voluptatum cumque laborum voluptatem.', '2024-11-06 09:24:10', '2024-11-06 09:24:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_writer_id_foreign` (`writer_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_writer_id_foreign` FOREIGN KEY (`writer_id`) REFERENCES `writers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
