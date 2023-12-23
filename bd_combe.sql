-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-12-2023 a las 17:26:12
-- Versión del servidor: 5.7.44
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `wwwhgarciar_combe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accion`
--

CREATE TABLE `accion` (
  `id_accion` int(11) NOT NULL,
  `titulo` varchar(5000) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `accion`
--

INSERT INTO `accion` (`id_accion`, `titulo`, `fecha`, `estado`, `created_at`, `updated_at`) VALUES
(3, '¿En qué trabajaremos para mejorar nuestro desempeño?', '2022-05-29', 1, '2022-05-29 14:47:28', '2022-05-30 03:07:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `are_codigo` int(11) NOT NULL,
  `are_descripcion` varchar(500) DEFAULT NULL,
  `are_abreviatura` varchar(20) DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`are_codigo`, `are_descripcion`, `are_abreviatura`, `activo`, `correo`, `created_at`, `updated_at`) VALUES
(1, 'TECNOLOGÍA DE LA INFORMACIÓN', 'TI', 1, NULL, '2022-05-01 23:54:37', '2022-05-01 23:54:37'),
(2, 'ALMACEN', 'ALMACEN', 1, 'almacen@gmail.com', '2022-05-11 04:15:48', '2022-05-11 04:15:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `abrev` varchar(50) NOT NULL,
  `tipo` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `descripcion`, `abrev`, `tipo`, `created_at`, `updated_at`, `estado`) VALUES
(1, 'EQUIPOS DE PROTECCION PER', 'EPP\'s', 1, '2022-05-09 10:11:18', '2022-05-09 10:28:34', 1),
(2, 'FERRETERIA', 'FERR', 1, '2022-05-09 10:29:30', '2022-05-09 10:29:51', 1),
(3, 'TUBERIAS  - ADAPTADORES', 'TUB', 1, '2022-05-09 10:30:39', '2022-05-09 10:30:39', 1),
(4, 'MINERIA', 'MIN', 1, '2022-05-09 10:30:54', '2022-05-09 10:30:54', 1),
(5, 'ACEITES', 'ACEITE', 1, '2022-05-09 10:31:11', '2022-05-09 10:31:11', 1),
(6, 'MINERIA - ACCSESORIOS', 'ACCSESORIOS', 1, '2022-05-09 10:31:40', '2022-05-09 10:31:40', 1),
(7, 'PINTURAS', 'PINTURAS', 1, '2022-05-09 10:31:58', '2022-05-09 10:31:58', 1),
(8, 'RIEGO', 'RIEGO', 1, '2022-05-09 10:32:25', '2022-05-09 10:32:25', 1),
(9, 'ACSESORIOS DE SEGURIDAD', 'ACSESORIOS DE SEGURIDAD', 1, '2022-05-09 10:32:39', '2022-05-09 10:32:39', 1),
(10, 'INDUMENTARIA', 'INDUMENTARIA', 1, '2022-05-09 10:32:51', '2022-05-09 10:32:51', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `celebrar`
--

CREATE TABLE `celebrar` (
  `id_celebrar` int(11) NOT NULL,
  `pregunta` varchar(5000) DEFAULT NULL,
  `respuesta` varchar(5000) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `celebrar`
--

INSERT INTO `celebrar` (`id_celebrar`, `pregunta`, `respuesta`, `estado`, `fecha`, `created_at`, `updated_at`) VALUES
(1, '¿Qué comportamientos y acciones positivas fueron demostrados?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1, '2022-05-29', '2022-05-29 13:46:04', '2022-05-29 13:48:42'),
(2, '¿Qué haremos para que estas 24 horas sean más seguras?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1, '2022-05-30', '2022-05-29 13:52:33', '2022-05-29 13:52:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desempenio`
--

CREATE TABLE `desempenio` (
  `id_desempenio` int(11) NOT NULL,
  `primera_pregunta` varchar(500) DEFAULT NULL,
  `primera_respuesta` varchar(5000) DEFAULT NULL,
  `segunda_pregunta` varchar(500) DEFAULT NULL,
  `segunda_respuesta` varchar(5000) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `desempenio`
--

INSERT INTO `desempenio` (`id_desempenio`, `primera_pregunta`, `primera_respuesta`, `segunda_pregunta`, `segunda_respuesta`, `estado`, `fecha`, `activo`, `created_at`, `updated_at`) VALUES
(1, '¿Dónde nos fue bien con nuestro trabajo en las últimas 24 horas y por qué?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '¿Dónde no nos fue tan bien en las últimas 24 horas y por qué?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1, '2022-05-25', 0, '2022-05-25 09:53:23', '2022-05-29 12:16:37'),
(2, '¿Dónde nos fue bien con nuestro trabajo en las últimas 24 horas y por qué?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '¿Dónde no nos fue tan bien en las últimas 24 horas y por qué?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 0, '2022-05-25', 1, '2022-05-25 09:54:05', '2022-05-29 12:21:19'),
(3, '¿Dónde nos fue bien con nuestro trabajo en las últimas 24 horas y por qué?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '¿Dónde no nos fue tan bien en las últimas 24 horas y por qué?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1, '2022-05-29', 1, '2022-05-29 12:21:31', '2022-05-29 12:21:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_accion`
--

CREATE TABLE `detalle_accion` (
  `id_detaccion` int(11) NOT NULL,
  `id_accion` int(11) DEFAULT NULL,
  `tema` varchar(5000) DEFAULT NULL,
  `respuesta` varchar(5000) DEFAULT NULL,
  `id_usuario` varchar(500) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_accion`
--

INSERT INTO `detalle_accion` (`id_detaccion`, `id_accion`, `tema`, `respuesta`, `id_usuario`, `estado`, `created_at`, `updated_at`) VALUES
(3, 3, 'Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BCdef', NULL, 'Hugo Garcia Rosas', 0, '2022-05-29 14:47:28', '2022-05-30 04:32:33'),
(4, 3, 'Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BCd', NULL, 'Nadal Castillo Cerron', 1, '2022-05-29 14:47:28', '2022-05-30 04:24:12'),
(7, 3, 'Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BCh', NULL, 'prueba pruebax', 1, '2022-05-30 04:05:22', '2022-05-30 04:24:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_riesgo`
--

CREATE TABLE `detalle_riesgo` (
  `id_detalle` int(11) NOT NULL,
  `id_riesgo` int(11) DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  `id_fatalidad` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_riesgo`
--

INSERT INTO `detalle_riesgo` (`id_detalle`, `id_riesgo`, `activo`, `id_fatalidad`, `created_at`, `updated_at`) VALUES
(51, 1, 1, 16, '2022-05-30 02:40:22', '2022-05-30 02:40:22'),
(52, 1, 1, 17, '2022-05-30 02:41:36', '2022-05-30 02:41:36'),
(53, 2, 1, 17, '2022-05-30 02:41:36', '2022-05-30 02:41:36'),
(54, 18, 1, 17, '2022-05-30 02:41:36', '2022-05-30 02:41:36'),
(55, 19, 1, 17, '2022-05-30 02:41:36', '2022-05-30 02:41:36'),
(56, 14, 1, 20, '2022-05-30 02:48:31', '2022-05-30 02:48:31'),
(57, 15, 1, 20, '2022-05-30 02:48:31', '2022-05-30 02:48:31'),
(58, 16, 1, 20, '2022-05-30 02:48:31', '2022-05-30 02:48:31'),
(59, 17, 1, 20, '2022-05-30 02:48:31', '2022-05-30 02:48:31'),
(60, 18, 1, 20, '2022-05-30 02:48:31', '2022-05-30 02:48:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfoque`
--

CREATE TABLE `enfoque` (
  `id_enfoque` int(11) NOT NULL,
  `pregunta` mediumtext,
  `respuesta` varchar(5000) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `enfoque`
--

INSERT INTO `enfoque` (`id_enfoque`, `pregunta`, `respuesta`, `estado`, `fecha`, `created_at`, `updated_at`) VALUES
(1, '¿Qué haremos para que estas 24 horas sean más seguras?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\n\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\n\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\n\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1, '2022-05-30', '2022-05-29 12:59:41', '2022-05-29 13:24:54'),
(2, '¿Qué haremos para que estas 24 horas sean más seguras?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1, '2022-05-31', '2022-05-29 13:04:00', '2022-05-29 13:04:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fatalidad`
--

CREATE TABLE `fatalidad` (
  `id_fatalidad` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `titulo` varchar(500) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fatalidad`
--

INSERT INTO `fatalidad` (`id_fatalidad`, `fecha`, `titulo`, `estado`, `created_at`, `updated_at`) VALUES
(16, '2022-05-25', 'RIESGOS DE FATALIDAD', 1, '2022-05-25 12:45:20', '2022-05-25 12:45:20'),
(17, '2022-05-26', 'RIESGOS DE FATALIDAD', 1, '2022-05-25 12:46:32', '2022-05-25 12:46:32'),
(19, '2022-05-29', 'RIESGOS DE FATALIDAD', 0, '2022-05-30 06:40:47', '2022-05-30 06:55:21'),
(20, '2022-05-31', 'RIESGOS DE FATALIDAD', 1, '2022-05-30 07:48:31', '2022-05-30 07:48:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso_productos`
--

CREATE TABLE `ingreso_productos` (
  `id_producto` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `observaciones` varchar(500) DEFAULT NULL,
  `num_documento` varchar(50) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `anio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ingreso_productos`
--

INSERT INTO `ingreso_productos` (`id_producto`, `fecha`, `observaciones`, `num_documento`, `estado`, `created_at`, `updated_at`, `anio`) VALUES
(2, '2022-05-14', 'esto es una prueba', '0011', 2, '2022-05-15 07:36:58', '2022-05-15 07:36:58', NULL),
(12, '2022-05-20', 'Observaciones', '0015', 1, '2022-05-20 22:17:18', '2022-05-20 22:17:18', 2022),
(13, '2022-05-20', 'qwerty', '0018', 1, '2022-05-20 22:20:13', '2022-05-20 22:20:13', 2022),
(14, '2023-02-17', 'edfedf', '00023', 1, '2023-02-17 10:36:19', '2023-02-17 10:36:19', 2344);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso_producto_detalle`
--

CREATE TABLE `ingreso_producto_detalle` (
  `idproddet` int(11) NOT NULL,
  `idingreso` int(11) NOT NULL,
  `idproducto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `cod_producto` char(11) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ingreso_producto_detalle`
--

INSERT INTO `ingreso_producto_detalle` (`idproddet`, `idingreso`, `idproducto`, `cantidad`, `cod_producto`, `precio`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 5, NULL, 12, '2022-05-15 07:36:58', '2022-05-15 07:36:58'),
(2, 2, 3, 5, NULL, 45, '2022-05-15 07:36:58', '2022-05-15 07:36:58'),
(3, 2, 4, 3, NULL, 67, '2022-05-15 07:36:58', '2022-05-15 07:36:58'),
(4, 13, 2, 12, 'ELECT-0001', 3, '2022-05-20 22:20:13', '2022-05-20 22:20:13'),
(5, 13, 4, 5, 'ELECT-0003', 2, '2022-05-20 22:20:13', '2022-05-20 22:20:13'),
(6, 14, 4, 5, 'ELECT-0003', 5, '2023-02-17 10:36:19', '2023-02-17 10:36:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kardex`
--

CREATE TABLE `kardex` (
  `id_kardex` int(11) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `ingreso` float(18,2) DEFAULT NULL,
  `salida` float(18,2) DEFAULT NULL,
  `saldo` float(18,2) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `id_ingreso` int(11) DEFAULT NULL,
  `precio` float(18,2) DEFAULT NULL,
  `metodo` float(18,2) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `kardex`
--

INSERT INTO `kardex` (`id_kardex`, `id_producto`, `fecha`, `ingreso`, `salida`, `saldo`, `tipo`, `id_ingreso`, `precio`, `metodo`, `estado`, `created_at`, `updated_at`) VALUES
(1, 2, '2022-05-15', 10.00, 0.00, 10.00, 1, 2, 4.50, 45.00, 1, '2022-05-15 17:49:16', '2022-05-15 17:49:16'),
(15, 2, '2022-05-15', 5.00, 0.00, 15.00, 1, 2, 12.00, 105.00, 1, '2022-05-18 12:08:45', '2022-05-18 12:08:45'),
(16, 3, '2022-05-15', 5.00, 0.00, 5.00, 1, 2, 45.00, 225.00, 1, '2022-05-18 12:08:45', '2022-05-18 12:08:45'),
(17, 4, '2022-05-15', 3.00, 0.00, 3.00, 1, 2, 67.00, 201.00, 1, '2022-05-18 12:08:45', '2022-05-18 12:08:45'),
(21, 2, '2022-05-15', 5.00, 0.00, 20.00, 1, 2, 12.00, 165.00, 1, '2022-05-18 12:12:52', '2022-05-18 12:12:52'),
(22, 3, '2022-05-15', 5.00, 0.00, 10.00, 1, 2, 45.00, 450.00, 1, '2022-05-18 12:12:52', '2022-05-18 12:12:52'),
(23, 4, '2022-05-15', 3.00, 0.00, 6.00, 1, 2, 67.00, 402.00, 1, '2022-05-18 12:12:52', '2022-05-18 12:12:52'),
(24, 2, '2022-05-20', 12.00, 0.00, 32.00, 1, 13, 3.00, 201.00, 1, '2022-11-17 03:14:07', '2022-11-17 03:14:07'),
(25, 4, '2022-05-20', 5.00, 0.00, 11.00, 1, 13, 2.00, 412.00, 1, '2022-11-17 03:14:07', '2022-11-17 03:14:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `descripcion` varchar(5000) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha` datetime DEFAULT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `titulo`, `descripcion`, `color`, `img`, `created_at`, `updated_at`, `fecha`, `autor`, `estado`) VALUES
(5, 'TITULO DE NOTICIA 1', NULL, NULL, '1653900612_blog-page-1.jpg', '2022-05-29 06:03:11', '2022-05-30 13:50:12', '2022-05-28 00:00:00', NULL, 1),
(6, 'TITULO DE NOTICIA 2', NULL, NULL, '1653900578_blog-page-4.jpg', '2022-05-29 06:04:49', '2022-05-30 13:49:38', '2022-05-29 00:00:00', NULL, 1),
(7, 'TITULO DE NOTICIA 3', NULL, NULL, '1653900569_blog-page-3.jpg', '2022-05-29 06:06:28', '2022-05-30 13:49:29', '2022-05-31 00:00:00', NULL, 1),
(8, 'TITULO DE NOTICIA 4', NULL, NULL, '1653900556_blog-page-2.jpg', '2022-05-29 06:12:21', '2022-05-30 13:49:16', '2022-06-01 00:00:00', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `fecha` date DEFAULT NULL,
  `observaciones` varchar(500) DEFAULT NULL,
  `num_documento` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `anio` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`fecha`, `observaciones`, `num_documento`, `estado`, `anio`, `created_at`, `updated_at`, `id_orden`) VALUES
('2022-05-24', 'QWERTY', 1, 1, 2022, '2022-05-15 08:08:25', '2022-05-15 08:08:25', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_detalle`
--

CREATE TABLE `orden_detalle` (
  `idordendet` int(11) NOT NULL,
  `idorden` int(11) DEFAULT NULL,
  `idproducto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `cod_producto` int(11) DEFAULT NULL,
  `precio` float(18,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'crear usuarios', 'crear usuario', '2022-05-05 05:43:32', '2022-05-05 05:43:32'),
(2, 'editar_usuarios', 'editar_usuarios', '2022-05-30 08:02:30', '2022-05-30 08:02:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(11) NOT NULL,
  `permission_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2022-05-30 13:11:35', '2022-05-30 13:11:35'),
(3, 1, 3, '2022-05-30 13:12:14', '2022-05-30 13:12:14'),
(4, 2, 3, '2022-05-30 13:12:14', '2022-05-30 13:12:14'),
(5, 1, 4, '2022-05-30 13:13:17', '2022-05-30 13:13:17'),
(6, 2, 4, '2022-05-30 13:13:17', '2022-05-30 13:13:17'),
(7, 1, 5, '2022-05-30 13:15:07', '2022-05-30 13:15:07'),
(9, 2, 6, '2022-05-30 13:45:33', '2022-05-30 13:45:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `persona_ID` int(11) NOT NULL,
  `paterno` varchar(50) DEFAULT NULL,
  `materno` varchar(50) DEFAULT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `tipo_persona` int(11) DEFAULT NULL,
  `tipo_documento` int(11) DEFAULT NULL,
  `documento` int(11) DEFAULT NULL,
  `fecha_nacimiento` timestamp NULL DEFAULT NULL,
  `sexo` int(11) DEFAULT NULL,
  `celular` varchar(9) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`persona_ID`, `paterno`, `materno`, `nombres`, `tipo_persona`, `tipo_documento`, `documento`, `fecha_nacimiento`, `sexo`, `celular`, `email`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 'Admin', 1, 1, 10124578, '0000-00-00 00:00:00', 1, '987654321', 'admin@gmail.com', 1, '2022-05-02 00:26:43', '2022-05-02 00:26:43'),
(2, 'prueba', 'admin', 'isactive', 1, 1, 48626692, '2000-05-02 04:33:06', 1, '987654321', 'prueba@gmail.com', 1, '2022-05-02 04:34:12', '2022-05-02 04:34:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `codigo` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `id_unidad_medida` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `codigo`, `descripcion`, `id_categoria`, `id_unidad_medida`, `estado`, `created_at`, `updated_at`) VALUES
(2, 'ELECT-0001', 'TOMA CORRIENTE LECCO DE 3 PUERTOS COLOR MARFIL', 2, 1, 1, '2022-05-09 11:56:24', '2022-05-09 11:56:24'),
(3, 'ELECT-0002', 'CINTA AISLANTE TEMFLEX 155 - MARCA 3M 3/4 - (20YD)', 2, 1, 1, '2022-05-10 08:38:15', '2022-05-10 08:56:14'),
(4, 'ELECT-0003', 'ENCHUFE SIMPLE CONEXION AMERICANA NEGRO', 2, 1, 1, '2022-05-15 06:03:02', '2022-05-15 06:03:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `ruc` varchar(20) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombres`, `ruc`, `estado`, `direccion`, `telefono`, `created_at`, `updated_at`, `email`) VALUES
(1, 'CADMUS TECH', '10488688884', 1, 'NATASHA ALTA', '99999999', '2022-05-05 04:47:35', '2022-05-09 10:25:13', 'cadmustech@gmail.com'),
(3, 'HUGO TECH', '10486266924', 1, 'TRUJILLO', '987654321', '2022-05-08 11:43:21', '2022-05-09 09:24:27', 'hugogarciarosas@gmail.com'),
(4, 'PRUEBA', '10702236792', 0, 'Natasha Alta Mz C\' Lote 19A', '980031334', '2022-06-02 00:07:24', '2022-06-02 00:08:35', 'nadalgv@hotmail.com'),
(5, 'Nadal Gabriel Vásquez', '10702236792', 1, 'Natasha Alta Mz C\' Lote 19A', '980031334', '2022-07-18 04:05:25', '2022-07-18 04:05:25', 'nadalgv@hotmail.com'),
(6, 'PRUEBA 1', '10486266924', 1, 'Q', '987654321', '2023-12-17 05:45:04', '2023-12-17 05:45:19', 'prueba@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `riesgo_fatalidad`
--

CREATE TABLE `riesgo_fatalidad` (
  `id_riesgo` int(11) NOT NULL,
  `texto` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `activo` int(11) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  `img_error` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `riesgo_fatalidad`
--

INSERT INTO `riesgo_fatalidad` (`id_riesgo`, `texto`, `created_at`, `updated_at`, `activo`, `img`, `img_error`) VALUES
(1, 'Evento en Espacio Confinado', '2022-05-25 05:43:55', '2022-05-25 05:43:55', 1, '1.png', '1.1.png'),
(2, 'Contacto con Electricidad', '2022-05-25 05:44:37', '2022-05-25 05:44:37', 1, '2.png', '2.1.png'),
(3, 'Deslizamiento de Terreno Superficie', '2022-05-25 05:45:26', '2022-05-25 05:45:26', 1, '9.png', '9.1.png'),
(4, 'Atrapado por Equipo en Movimiento', '2022-05-25 05:46:09', '2022-05-25 05:46:09', 1, '13.png', '13.1.png'),
(5, 'Evento de Vehículo Pesado Volcadura', '2022-05-25 05:46:37', '2022-05-25 05:46:37', 1, '14.png', '14.1.png'),
(6, 'Interacción Vehículo/Peatón-Superficie', '2022-05-25 05:47:16', '2022-05-25 05:47:16', 1, '3.png', '3.1.png'),
(7, 'Incidente Vehícular', '2022-05-25 05:48:11', '2022-05-25 05:48:11', 1, '4.png', '4.1.png'),
(8, 'Interacción Vehículo/Peatón - Subterránea', '2022-05-25 05:49:03', '2022-05-25 05:49:03', 1, '10.png', '10.1.png'),
(9, 'Impactado por caída de objetos', '2022-05-25 05:49:27', '2022-05-25 05:49:27', 1, '15.png', '15.1.png'),
(10, 'Liberación Descontrolada de Energía', '2022-05-25 05:49:48', '2022-05-25 05:49:48', 1, '16.png', '16.1.png'),
(11, 'Caída de Altura', '2022-05-25 05:50:18', '2022-05-25 05:50:18', 1, '5.png', '5.1.png'),
(12, 'Deslizamiento de Terreno - Subterráneo', '2022-05-25 05:50:45', '2022-05-25 05:50:45', 1, '6.png', '6.1.png'),
(13, 'Incidente  durante la Manipulación de Llantas', '2022-05-25 05:51:40', '2022-05-25 05:51:40', 1, '11.png', '11.1.png'),
(14, 'Carga Descontrolada durante el Izaje', '2022-05-25 05:52:26', '2022-05-25 05:52:26', 1, '17.png', '17.1.png'),
(15, 'Colisión entre Vehículo Pesado y Liviano', '2022-05-25 05:52:52', '2022-05-25 05:52:52', 1, '18.png', '18.1.png'),
(16, 'Fuego o Explosión en Subterránea', '2022-05-25 05:53:25', '2022-05-25 05:53:25', 1, '7.png', '7.1.png'),
(17, 'Agresión por Terceros', '2022-05-25 05:53:44', '2022-05-25 05:53:44', 1, '8.png', '8.1.png'),
(18, 'Impactado por rayo/Exposición a vientos fuertes', '2022-05-25 05:54:19', '2022-05-25 05:54:19', 1, '19.png', '19.1.png'),
(19, 'Caída a fuentes de agua', '2022-05-25 06:06:49', '2022-05-25 06:06:49', 1, '12.png', '12.1.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `full-access` char(3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `descripcion`, `full-access`, `created_at`, `updated_at`) VALUES
(1, 'ADMINISTRADOR GENERAL', 'administrador_general', 'ACCESO A TODO', 'yes', '2022-05-05 05:39:05', '2022-05-05 05:39:05'),
(2, 'Almacenero', 'almacenero', 'soy el almacenero', 'no', '2022-05-30 13:11:35', '2022-05-30 13:15:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-05-05 05:41:04', '2022-05-05 05:41:04'),
(4, 2, 7, '2022-05-30 13:25:06', '2022-05-30 13:25:06'),
(6, 1, 8, '2022-05-30 13:28:19', '2022-05-30 13:28:19'),
(7, 1, 10, '2022-05-30 13:46:37', '2022-05-30 13:46:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguridad`
--

CREATE TABLE `seguridad` (
  `id_seguridad` int(11) NOT NULL,
  `primera_pregunta` varchar(500) DEFAULT NULL,
  `segunda_pregunta` varchar(500) DEFAULT NULL,
  `primera_respuesta` varchar(5000) DEFAULT NULL,
  `segunda_respuesta` varchar(5000) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seguridad`
--

INSERT INTO `seguridad` (`id_seguridad`, `primera_pregunta`, `segunda_pregunta`, `primera_respuesta`, `segunda_respuesta`, `estado`, `fecha`, `created_at`, `updated_at`) VALUES
(1, '¿Qué hemos hecho para trabajar de manera más segura en las últimas 24 horas?', '¿Qué pudo haber sido más seguro en las últimas 24 horas?', '¿Qué pudo haber sido más seguro en las últimas 24 horas?¿Qué pudo haber sido más seguro en las últimas 24 horas?¿Qué pudo haber sido más seguro en las últimas 24 horas?¿Qué pudo haber sido más seguro en las últimas 24 horas?¿Qué pudo haber sido más seguro en las últimas 24 horas?¿Qué pudo haber sido más seguro en las últimas 24 horas?¿Qué pudo haber sido más seguro en las últimas 24 horas?¿Qué pudo haber sido más seguro en las últimas 24 horas?', '¿Qué pudo haber sido más seguro en las últimas 24 horas?¿Qué pudo haber sido más seguro en las últimas 24 horas?¿Qué pudo haber sido más seguro en las últimas 24 horas?¿Qué pudo haber sido más seguro en las últimas 24 horas?¿Qué pudo haber sido más seguro en las últimas 24 horas?', 1, '2022-05-30', '2022-05-25 08:59:57', '2022-05-30 09:21:06'),
(3, '¿Qué hemos hecho para trabajar de manera más segura en las últimas 24 horas?', '¿Qué pudo haber sido más seguro en las últimas 24 horas?', 'wwwwwwwwwww', 'qqqqqqqqqqqqqqq', 0, '2022-05-29', '2022-05-29 10:37:11', '2022-05-29 10:37:25'),
(4, '¿Qué hemos hecho para trabajar de manera más segura en las últimas 24 horas?', '¿Qué pudo haber sido más seguro en las últimas 24 horas?', '¿Qué hemos hecho para trabajar de manera más segura en las últimas 24 horas?¿Qué hemos hecho para trabajar de manera más segura en las últimas 24 horas?¿Qué hemos hecho para trabajar de manera más segura en las últimas 24 horas?¿Qué hemos hecho para trabajar de manera más segura en las últimas 24 horas?¿Qué hemos hecho para trabajar de manera más segura en las últimas 24 horas?¿Qué hemos hecho para trabajar de manera más segura en las últimas 24 horas?¿Qué hemos hecho para trabajar de manera más segura en las últimas 24 horas?¿Qué hemos hecho para trabajar de manera más segura en las últimas 24 horas?', '¿Qué hemos hecho para trabajar de manera más segura en las últimas 24 horas?¿Qué hemos hecho para trabajar de manera más segura en las últimas 24 horas?¿Qué hemos hecho para trabajar de manera más segura en las últimas 24 horas?¿Qué hemos hecho para trabajar de manera más segura en las últimas 24 horas?¿Qué hemos hecho para trabajar de manera más segura en las últimas 24 horas?¿Qué hemos hecho para trabajar de manera más segura en las últimas 24 horas?¿Qué hemos hecho para trabajar de manera más segura en las últimas 24 horas?', 1, '2022-05-29', '2022-05-29 12:58:23', '2022-05-30 09:21:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablas`
--

CREATE TABLE `tablas` (
  `tabla_id` int(11) NOT NULL,
  `valor` int(11) DEFAULT NULL,
  `dep_id` int(11) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `abrev` varchar(100) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tablas`
--

INSERT INTO `tablas` (`tabla_id`, `valor`, `dep_id`, `descripcion`, `abrev`, `estado`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, 'DOCUMENTO DE IDENTIDAD', 'DDI', 1, '2022-05-01 23:45:18', '2022-05-01 23:45:18'),
(2, 1, 3, 'DNI', 'DNI', 1, '2022-05-01 23:47:19', '2022-05-01 23:47:19'),
(3, 6, 3, 'RUC', 'RUC', 1, '2022-05-01 23:47:42', '2022-05-01 23:47:42'),
(4, 4, 3, 'CARNET EXTRANJERIA', 'C EX', 1, '2022-05-01 23:48:22', '2022-05-01 23:48:22'),
(5, 11, 3, 'PARTIDA DE NACIMIENTO', 'PART', 1, '2022-05-01 23:48:57', '2022-05-01 23:48:57'),
(6, 9, 3, 'CARNE DE SOLICIT DE REFUGIO', 'CSR', 1, '2022-05-01 23:49:26', '2022-05-01 23:49:26'),
(7, 23, 3, 'CARNE DE PERM.TEMP.PERMANENCIA', 'CPTP', 1, '2022-05-01 23:49:55', '2022-05-01 23:49:55'),
(8, 22, 3, 'CARNE DE IDENTIDAD-RELACIONES EXTERIORES', 'CI-RE', 1, '2022-05-01 23:50:25', '2022-05-01 23:50:25'),
(9, 7, 3, 'PASAPORTE', 'PSS', 1, '2022-05-01 23:51:05', '2022-05-01 23:51:05'),
(10, 24, 3, 'DOC DE IDENTIDAD EXTRANJERO', 'DIE', 1, '2022-05-01 23:51:22', '2022-05-01 23:51:22'),
(11, 1, NULL, 'TIPO PERSONA', '', 1, '2022-05-02 00:00:22', '2022-05-02 00:00:22'),
(12, 1, 1, 'NATURAL', '', 1, '2022-05-02 00:02:58', '2022-05-02 00:02:58'),
(13, 2, 1, 'JURIDICA', '', 1, '2022-05-02 00:03:10', '2022-05-02 00:03:10'),
(14, 2, NULL, 'SEXO', '', 1, '2022-05-02 00:29:32', '2022-05-02 00:29:32'),
(15, 1, 2, 'MASCULINO', '', 1, '2022-05-02 00:29:56', '2022-05-02 00:29:56'),
(16, 2, 2, 'FEMENINO', '', 1, '2022-05-02 00:30:14', '2022-05-02 00:30:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_medida`
--

CREATE TABLE `unidad_medida` (
  `id_unidad_medida` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `abrev` varchar(50) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidad_medida`
--

INSERT INTO `unidad_medida` (`id_unidad_medida`, `descripcion`, `abrev`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'UNIDAD', 'UN', 1, '2022-05-09 10:57:49', '2022-05-09 10:57:49'),
(2, 'ROLLOS', 'ROLLOS', 1, '2022-05-09 10:58:07', '2022-05-09 10:58:07'),
(3, 'LITROS', 'L', 0, '2022-05-09 10:59:27', '2022-05-09 11:01:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ares_codarea` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `pass` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `personal_id` int(11) DEFAULT NULL,
  `dni` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaCaducidad` date DEFAULT NULL,
  `telefono` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `ares_codarea`, `estado`, `tipo`, `pass`, `cliente_id`, `personal_id`, `dni`, `fechaCaducidad`, `telefono`) VALUES
(1, 'admin general', 'admin@gmail.com', NULL, '$2y$10$fpSN5XXipDxvmsXkqX12f.03VxSDMQrp5O0Ie55WyesF4j2Vh5oES', NULL, '2022-04-26 07:54:33', '2022-04-26 07:54:33', 1, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'HUGO GARCIA ROSAS', 'hugogarciarosas@gmail.com', NULL, '$2y$10$FkaGvKJtfKj5Q16cneo3y.s4/SXW2RobOX7guM4Gdo2xRZCwa8hxC', NULL, '2022-05-30 13:19:43', '2022-05-30 13:19:43', NULL, NULL, 1, '123456789', NULL, NULL, '48626692', NULL, '987654321'),
(8, 'nadal lindley', 'nadal@gmail.com', NULL, '$2y$10$WAOnW3yNC7go7I08gtWkMuYFUkQn9ZoAP6xAUEEAV5VF8TmJ.vM/6', NULL, '2022-05-30 13:28:11', '2022-05-30 13:28:37', NULL, NULL, 0, '123456789', NULL, NULL, '48669652', NULL, '987654321'),
(10, 'nadal lindley', 'nadallindley@gmail.com', NULL, '$2y$10$vA8ESPpOj0aD0USaWCXMPOoHBfv5gD4lTFlXUGGJurjZgULKmQPUm', NULL, '2022-05-30 13:46:37', '2022-05-30 13:46:37', NULL, NULL, 1, '987654321', NULL, NULL, '78965412', NULL, '97654321');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accion`
--
ALTER TABLE `accion`
  ADD PRIMARY KEY (`id_accion`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`are_codigo`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `celebrar`
--
ALTER TABLE `celebrar`
  ADD PRIMARY KEY (`id_celebrar`);

--
-- Indices de la tabla `desempenio`
--
ALTER TABLE `desempenio`
  ADD PRIMARY KEY (`id_desempenio`);

--
-- Indices de la tabla `detalle_accion`
--
ALTER TABLE `detalle_accion`
  ADD PRIMARY KEY (`id_detaccion`);

--
-- Indices de la tabla `detalle_riesgo`
--
ALTER TABLE `detalle_riesgo`
  ADD PRIMARY KEY (`id_detalle`);

--
-- Indices de la tabla `enfoque`
--
ALTER TABLE `enfoque`
  ADD PRIMARY KEY (`id_enfoque`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fatalidad`
--
ALTER TABLE `fatalidad`
  ADD PRIMARY KEY (`id_fatalidad`);

--
-- Indices de la tabla `ingreso_productos`
--
ALTER TABLE `ingreso_productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `ingreso_producto_detalle`
--
ALTER TABLE `ingreso_producto_detalle`
  ADD PRIMARY KEY (`idproddet`);

--
-- Indices de la tabla `kardex`
--
ALTER TABLE `kardex`
  ADD PRIMARY KEY (`id_kardex`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`id_orden`);

--
-- Indices de la tabla `orden_detalle`
--
ALTER TABLE `orden_detalle`
  ADD PRIMARY KEY (`idordendet`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`persona_ID`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `riesgo_fatalidad`
--
ALTER TABLE `riesgo_fatalidad`
  ADD PRIMARY KEY (`id_riesgo`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seguridad`
--
ALTER TABLE `seguridad`
  ADD PRIMARY KEY (`id_seguridad`);

--
-- Indices de la tabla `tablas`
--
ALTER TABLE `tablas`
  ADD PRIMARY KEY (`tabla_id`);

--
-- Indices de la tabla `unidad_medida`
--
ALTER TABLE `unidad_medida`
  ADD PRIMARY KEY (`id_unidad_medida`);

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
-- AUTO_INCREMENT de la tabla `accion`
--
ALTER TABLE `accion`
  MODIFY `id_accion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `are_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `celebrar`
--
ALTER TABLE `celebrar`
  MODIFY `id_celebrar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `desempenio`
--
ALTER TABLE `desempenio`
  MODIFY `id_desempenio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `detalle_accion`
--
ALTER TABLE `detalle_accion`
  MODIFY `id_detaccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `detalle_riesgo`
--
ALTER TABLE `detalle_riesgo`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `enfoque`
--
ALTER TABLE `enfoque`
  MODIFY `id_enfoque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fatalidad`
--
ALTER TABLE `fatalidad`
  MODIFY `id_fatalidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `ingreso_productos`
--
ALTER TABLE `ingreso_productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `ingreso_producto_detalle`
--
ALTER TABLE `ingreso_producto_detalle`
  MODIFY `idproddet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `kardex`
--
ALTER TABLE `kardex`
  MODIFY `id_kardex` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `id_orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `orden_detalle`
--
ALTER TABLE `orden_detalle`
  MODIFY `idordendet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `riesgo_fatalidad`
--
ALTER TABLE `riesgo_fatalidad`
  MODIFY `id_riesgo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `seguridad`
--
ALTER TABLE `seguridad`
  MODIFY `id_seguridad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tablas`
--
ALTER TABLE `tablas`
  MODIFY `tabla_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `unidad_medida`
--
ALTER TABLE `unidad_medida`
  MODIFY `id_unidad_medida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
