-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2024 a las 20:56:37
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consultaautobuses`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autobuses`
--

CREATE TABLE `autobuses` (
  `id` int(11) NOT NULL,
  `cod_placa` varchar(10) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `color` varchar(10) NOT NULL,
  `cantidad_asientos` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `autobuses`
--

INSERT INTO `autobuses` (`id`, `cod_placa`, `marca`, `modelo`, `color`, `cantidad_asientos`, `created_at`, `updated_at`) VALUES
(1, 'AX3K25V', 'Youtong', 'ZZ1', 'ROJO', 20, '2024-10-27 04:45:53', '2024-10-27 04:45:53'),
(3, '5K8VXX', 'FORD', '2011', 'AMARILLO', 50, '2024-10-31 19:31:20', '2024-10-31 19:31:20'),
(4, '11VHH3K', 'YOUTONG', 'Z05', 'AZUL', 30, '2024-10-31 19:32:14', '2024-10-31 19:32:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `jobs`
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
-- Estructura de tabla para la tabla `job_batches`
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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '0001_01_01_000000_create_users_table', 1),
(5, '0001_01_01_000001_create_cache_table', 1),
(6, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `notification`
--

INSERT INTO `notification` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'NUEVA RUTA AGREGADA: CENTRO - LA LIMPIA', 'Esta ruta comienza desde 3 y hasta llegar a 6', '2024-10-28 20:36:29', '2024-10-28 20:36:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notification_leidas`
--

CREATE TABLE `notification_leidas` (
  `id` int(11) NOT NULL,
  `id_notification_fk` int(11) NOT NULL,
  `ind_leido` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `id_usuario_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paradas`
--

CREATE TABLE `paradas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(80) NOT NULL,
  `descripcion` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `paradas`
--

INSERT INTO `paradas` (`id`, `titulo`, `descripcion`, `created_at`, `updated_at`) VALUES
(7, 'DECANDIDO', 'AV LA LIMPIA, SUPER MERCADO DECANDIDO', '2024-10-31 19:36:54', '2024-10-31 19:37:05'),
(8, 'FARMATODO - LA LIMPIA', 'MULTI TIENDA FARMATODO AVENIDA LA LA LIMPIA', '2024-10-31 19:38:07', '2024-10-31 19:38:07'),
(9, 'MERCADO PERIFERICO - LA LIMPIA', 'PARADA DE MERCADO PERIFERICO EN LA AVENIDA LA LIMPIA', '2024-10-31 19:39:03', '2024-10-31 19:39:03'),
(10, 'BOMBA LOS ACEITUNOS', 'AV LA LIMPIA BOMBA LOS ACEITUNOS', '2024-10-31 19:40:03', '2024-10-31 19:40:03'),
(11, 'CENTRO COMERCIAL GALLERIAS', 'CENTRO COMERCIAL GALLERIAS MALL', '2024-10-31 19:40:29', '2024-10-31 19:40:29'),
(12, 'TOSTADAS EL RELOG', 'PARADA DE TORTADAS EL RELOS, PARADA DESPUES DE CRUZAR A LA IZQUIERDA', '2024-10-31 19:41:21', '2024-10-31 19:41:21'),
(13, 'CUARTEL LIBERTADOR', 'PARA EN EL CUARTEL LIBERTADOR', '2024-10-31 19:41:57', '2024-10-31 19:41:57'),
(14, 'BANCO BICENTENARIO', 'PARDA EN EL FRENTE DEL BANCO BICENTENARIO', '2024-10-31 19:42:23', '2024-10-31 19:43:05'),
(15, 'INTERSECCION AV DELICIAS CON 5 DE JULIO', 'SEMAFORO DE INTERSECION DE AV DELICIAS CON AV 5 DE JULIO', '2024-10-31 19:43:52', '2024-10-31 19:43:52'),
(16, 'SENIAL', 'AV 5 DE JULIO PARADA EN EL FRENTE DEL SENIAT', '2024-10-31 19:44:20', '2024-10-31 19:44:20'),
(17, 'PDVSA LA ESTANCIA', 'AV 5 DE JULIO PARADA EN TODO EL FRENTE DE PDVSA LA ESTANCIA', '2024-10-31 19:45:06', '2024-10-31 19:45:06'),
(18, 'INTERSECCION AV BELLA VISTA CON AV 5 DE JULIO', 'SEMAFORO DE INTERSECCION DE AV BELLA VISTA', '2024-10-31 19:46:07', '2024-10-31 19:46:07'),
(19, 'PLAZA DE LA REPUBLICA', 'AV 5 DE JULIO PARADA EN TODO EL FRENTE DE LA PLAZA DE LA REPUBLICA', '2024-10-31 19:47:14', '2024-10-31 19:47:14'),
(20, 'AVENIDA EL MILAGRO  EL MILAGRO', 'AVENIDA 2 EL MILAGRO', '2024-10-31 19:47:57', '2024-10-31 19:47:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person_data`
--

CREATE TABLE `person_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_apellido` varchar(255) NOT NULL,
  `cedula` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `person_data`
--

INSERT INTO `person_data` (`id`, `nombre_apellido`, `cedula`, `email`, `telefono`, `created_at`, `updated_at`) VALUES
(4, 'Juan Rincon', 23445978, 'jd.rincon021@gmail.com', '04146801859', '2024-10-24 04:53:05', '2024-10-24 04:53:05'),
(5, 'Luis Rincon', 24734747, 'luisrincon@gmail.com', '04140000000', '2024-10-30 16:26:57', '2024-10-30 16:26:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(25) NOT NULL,
  `descripcion` text NOT NULL,
  `tipo_destino` varchar(25) NOT NULL,
  `id_bus_fk` int(11) NOT NULL,
  `horario_desde` time NOT NULL,
  `horario_hasta` time NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id`, `titulo`, `descripcion`, `tipo_destino`, `id_bus_fk`, `horario_desde`, `horario_hasta`, `created_at`, `updated_at`) VALUES
(10, 'RUTA LA CURVA SAN MARTIN', 'RECORRIDO DEL AUTOBUS LA CURVA SAN MARTIN DE SALIDA', 'SALIDA', 4, '09:00:00', '10:45:00', '2024-10-31 19:53:59', '2024-10-31 19:53:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas_paradas`
--

CREATE TABLE `rutas_paradas` (
  `id` int(11) NOT NULL,
  `id_ruta_fk` int(11) NOT NULL,
  `id_parada_fk` int(11) NOT NULL,
  `hora_paso` time NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rutas_paradas`
--

INSERT INTO `rutas_paradas` (`id`, `id_ruta_fk`, `id_parada_fk`, `hora_paso`, `created_at`, `updated_at`) VALUES
(35, 10, 7, '09:00:00', '2024-10-31 19:53:59', '2024-10-31 19:53:59'),
(36, 10, 8, '09:10:00', '2024-10-31 19:53:59', '2024-10-31 19:53:59'),
(37, 10, 9, '09:25:00', '2024-10-31 19:53:59', '2024-10-31 19:53:59'),
(38, 10, 10, '09:35:00', '2024-10-31 19:53:59', '2024-10-31 19:53:59'),
(39, 10, 11, '09:45:00', '2024-10-31 19:53:59', '2024-10-31 19:53:59'),
(40, 10, 12, '10:00:00', '2024-10-31 19:53:59', '2024-10-31 19:53:59'),
(41, 10, 13, '10:10:00', '2024-10-31 19:53:59', '2024-10-31 19:53:59'),
(42, 10, 14, '10:20:00', '2024-10-31 19:53:59', '2024-10-31 19:53:59'),
(43, 10, 15, '10:25:00', '2024-10-31 19:53:59', '2024-10-31 19:53:59'),
(44, 10, 16, '10:30:00', '2024-10-31 19:53:59', '2024-10-31 19:53:59'),
(45, 10, 17, '10:35:00', '2024-10-31 19:53:59', '2024-10-31 19:53:59'),
(46, 10, 18, '10:40:00', '2024-10-31 19:53:59', '2024-10-31 19:53:59'),
(47, 10, 20, '10:45:00', '2024-10-31 19:53:59', '2024-10-31 19:53:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
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
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('hiWVgkEvSbsdsthGgjqy8G49K1ae07srcHNtGehw', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:131.0) Gecko/20100101 Firefox/131.0', 'YTozOntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6InFxREhQOWVRdHBVR1A3b3l1Rk9BU21SeDZEZUNrZDc0TnR4QUlQeVciO30=', 1730404584),
('k41bBFIWS7Lpu83pRcuAI9wqejWJMohR2B80UAI9', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:131.0) Gecko/20100101 Firefox/131.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUlJYM25zVjhRNDFxS3NTQ1RMdXpHaWdVejlFWEFLSmQ1czlFa1VWaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9sb2NhbGhvc3QvY29uc3VsdGFhdXRvYnVzZXMvcHVibGljIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1730402918);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `system_privileges`
--

CREATE TABLE `system_privileges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `denominacion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `system_privileges`
--

INSERT INTO `system_privileges` (`id`, `denominacion`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'USUARIO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_person_fk` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `id_rol_fk` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `id_person_fk`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `id_rol_fk`, `created_at`, `updated_at`) VALUES
(1, 4, 'webamster94', 'jd.rincon021@gmail.com', NULL, '$2y$12$ZMYBqAhrd14fWZtVxiRMpu/0xTBKz8oq3pztmL9yMG9wWVuI.XzHS', NULL, 1, '2024-10-24 08:53:06', '2024-10-24 08:53:06'),
(2, 5, 'Larturo97', 'luisrincon@gmail.com', NULL, '$2y$12$VHqteGLzHDh3GBBWEMXLyua7IFvrlTyPZru0GjVqSffTRJ43iH7ym', NULL, 2, '2024-10-30 20:26:57', '2024-10-30 20:29:22');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autobuses`
--
ALTER TABLE `autobuses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notification_leidas`
--
ALTER TABLE `notification_leidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paradas`
--
ALTER TABLE `paradas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `person_data`
--
ALTER TABLE `person_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `person_data_cedula_unique` (`cedula`),
  ADD UNIQUE KEY `person_data_email_unique` (`email`),
  ADD UNIQUE KEY `person_data_telefono_unique` (`telefono`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rutas_paradas`
--
ALTER TABLE `rutas_paradas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `system_privileges`
--
ALTER TABLE `system_privileges`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autobuses`
--
ALTER TABLE `autobuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `notification_leidas`
--
ALTER TABLE `notification_leidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `paradas`
--
ALTER TABLE `paradas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `person_data`
--
ALTER TABLE `person_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `rutas_paradas`
--
ALTER TABLE `rutas_paradas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `system_privileges`
--
ALTER TABLE `system_privileges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
