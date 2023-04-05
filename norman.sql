-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Pi 31.Mar 2023, 10:00
-- Verzia serveru: 10.4.25-MariaDB
-- Verzia PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `norman`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `data`
--

CREATE TABLE `data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prvy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `druhy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `treti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stvrty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `files`
--

INSERT INTO `files` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '20230323_093201_NORMAN DCT priority parameters_Plzen_14042021_24.xlsx', '2023-03-23 08:32:01', '2023-03-23 08:32:01'),
(2, '20230323_093536_NORMAN DCT monthly data_december.xlsx', '2023-03-23 08:35:36', '2023-03-23 08:35:36'),
(3, '20230329_135945_NORMAN DCT monthly data_december.xlsx', '2023-03-29 11:59:45', '2023-03-29 11:59:45'),
(6, '20230329_161242_NORMAN DCT monthly data_April_2.xlsx', '2023-03-29 14:12:42', '2023-03-29 14:12:42'),
(7, '20230329_184314_NORMAN DCT monthly data_April_1.xlsx', '2023-03-29 16:43:14', '2023-03-29 16:43:14'),
(8, '20230331_064834_NORMAN DCT monthly data_december_2.xlsx', '2023-03-31 04:48:35', '2023-03-31 04:48:35'),
(9, '20230331_064848_NORMAN DCT monthly data_January_1.xlsx', '2023-03-31 04:48:48', '2023-03-31 04:48:48');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_15_230346_create_data_table', 1),
(6, '2023_03_16_084322_create_sars_table', 2),
(7, '2023_03_23_081953_create_files_table', 3);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `sars`
--

CREATE TABLE `sars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_of_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_provider` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_of_contact` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `laboratory` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_of_country` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_of_city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `station_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `relevant_ec_code_wise` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `relevant_ec_code_other` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude_d` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude_m` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude_s` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude_decimal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude_d` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude_m` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude_s` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude_decimal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `altitude` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `design_capacity` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `population_served` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `catchment_size` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gdp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `people_positive` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `people_recovered` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `people_positive_past` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `people_recovered_past` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sample_matrix` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sample_from_hour` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sample_from_day` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sample_from_month` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sample_from_year` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sample_to_hour` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sample_to_day` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sample_to_month` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sample_to_year` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_sample` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_composite_sample` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sample_interval` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `flow_total` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `flow_minimum` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `flow_maximum` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_n_nh4_n` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tss` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dry_weather_conditions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_rain_event` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `associated_phenotype` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `genetic_marker` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_sample_preparation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `storage_of_sample` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume_of_sample` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `internal_standard_used1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `method_used_for_sample_preparation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_rna_extraction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `method_used_for_rna_extraction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `internal_standard_used2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rna1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rna2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `replicates1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `analytical_method_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `analytical_method_type_other` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_analysis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lod1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lod2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `loq1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `loq2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `uncertainty_of_the_quantification` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `efficiency` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rna3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pos_control_used` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `replicates2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ct` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gene1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gene2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sars_save` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sars_source` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sars_source_dir` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude_decimal_show` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude_decimal_show` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noexport` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexy pre tabuľku `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexy pre tabuľku `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexy pre tabuľku `sars`
--
ALTER TABLE `sars`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `data`
--
ALTER TABLE `data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pre tabuľku `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pre tabuľku `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `sars`
--
ALTER TABLE `sars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
