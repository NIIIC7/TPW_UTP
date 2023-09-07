-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2023 a las 00:33:11
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `descuento` tinyint(3) NOT NULL DEFAULT 0,
  `id_categoria` int(11) NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `descuento`, `id_categoria`, `activo`) VALUES
(1, ' Casaca sin Capucha Weinbrenner para Hombre', 'Fabricada con materiales de alta calidad, esta casaca ofrece un equilibrio perfecto entre estilo y funcionalidad. Su diseño sin capucha le confiere un aspecto refinado y sofisticado, permitiéndote lucir elegante sin sacrificar comodidad. El color café, que evoca tonos cálidos y terrosos, es ideal para la temporada de Otoño-Invierno, y te mantendrá abrigado sin comprometer tu estilo.', 220.00, 30, 3, 1),
(2, 'Blusa Oxford\r\n', '  <p>\r\n            Blusa en denim de algodón lavado con cuello clásico, botones adelante y canesú con trabilla en la espalda.\r\n            Modelo de corte relajado con hombros caídos, mangas largas con puños abotonados y bolsillos superiores con\r\n            solapa. Bajo redondeado con espalda algo más larga.\r\n        </p>\r\n        <p>\r\n            <strong>Composición:</strong>\r\n            <br>\r\n            Algodón 100%\r\n        </p>\r\n        <p>\r\n            <strong>Ajuste:</strong>\r\n            <br>\r\n            Corte holgado\r\n        </p>', 76.90, 20, 2, 1),
(3, 'Polera Amarilla', ' \r\n       \r\n        <p style=\"font-size: 16px; color: #555;\">Esta polera amarilla está confeccionada con suave algodón de alta calidad, proporcionando comodidad y estilo. Hecha con esmero en Perú, combina la artesanía local con la moda contemporánea.</p>\r\n    ', 152.00, 0, 2, 1),
(4, 'Pantalón Negro 100% algodón ', 'Hecho en Perú 100% algodón.', 140.00, 10, 2, 1),
(5, '\r\nPantalón amplio de twill', '   <div>\r\n        <h1>Pantalón de cinco bolsillos en twill de algodón elástico</h1>\r\n        <p>Modelo de talle alto con cierre y botón, y piernas amplias de corte recto.</p>\r\n\r\n        <p>Tamaño: El/la modelo mide 175 cm y luce una talla 36</p>\r\n        \r\n        <p>Composición: Algodón 98%, Elastano 2%</p>\r\n\r\n        <p>Ajuste: Corte estándar</p>\r\n\r\n        <p>Art. núm.: 0963087038</p>\r\n    </div>', 69.95, 0, 5, 1),
(6, 'Jogger para niños', ' <div>\r\n        <h1 style=\"font-size: 24px; color: #333; font-weight: bold;\">Cómodos joggers en tejido polera</h1>\r\n        <p style=\"font-size: 16px; color: #555;\">Modelo con elástico revestido y cordón de ajuste en la cintura, bolsillos en las costuras laterales y elástico revestido en los bajos.</p>\r\n\r\n        <p style=\"font-size: 16px; color: #444;\">Composición: Algodón 80%, Poliéster 20%</p>\r\n    </div>', 49.95, 0, 8, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
