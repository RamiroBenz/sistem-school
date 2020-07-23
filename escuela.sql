-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-07-2020 a las 12:18:05
-- Versión del servidor: 5.7.14-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administracion`
--

CREATE TABLE IF NOT EXISTS `administracion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `administracion`
--

INSERT INTO `administracion` (`id`, `nombre`, `apellido`, `direccion`, `telefono`, `email`) VALUES
(1, 'Ramiro', 'Benzacar', 'Emilio Lamarca 4959', 1162944709, 'ramiro.benzacar@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `f_nacimiento` date NOT NULL,
  `genero` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `seccion` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `dni` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aranceles`
--

CREATE TABLE IF NOT EXISTS `aranceles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estudiante` varchar(50) NOT NULL,
  `monto` float NOT NULL,
  `suscripcion` float NOT NULL,
  `pendiente` float NOT NULL,
  `fecha` date NOT NULL,
  `periodo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asuntos`
--

CREATE TABLE IF NOT EXISTS `asuntos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE IF NOT EXISTS `datos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cuit` varchar(15) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` int(20) NOT NULL,
  `fax` int(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pagina` varchar(255) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `moneda` varchar(50) NOT NULL,
  `pmax` int(5) NOT NULL,
  `pmin` int(5) NOT NULL,
  `año` int(5) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `inicio` date NOT NULL,
  `cierre` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `cuit`, `nombre`, `direccion`, `telefono`, `fax`, `email`, `pagina`, `ciudad`, `provincia`, `moneda`, `pmax`, `pmin`, `año`, `logo`, `inicio`, `cierre`) VALUES
(1, '30-53870999-5', 'R&B Escuelas de la ciudad', 'Emilio Lamarca 4961', 45723010, 45723010, 'escuelasdelaciudad@escuelaciudad.com.ar', 'www.rbcreacionesweb.com', 'C.A.B.A.', 'Buenos Aires', 'Peso', 10, 4, 2020, 'escuela.jpg', '2020-03-01', '2020-12-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE IF NOT EXISTS `maestros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `materia` varchar(50) NOT NULL,
  `f_nacimiento` date NOT NULL,
  `genero` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`id`, `nombre`, `apellido`, `direccion`, `email`, `tel`, `materia`, `f_nacimiento`, `genero`, `foto`) VALUES
(1, 'Ramiro', 'Benzacar', 'Emilio Lamarca 4959', 'ramiro.benzacar@hotmail.com', '11 6 294 4709', 'Informatica', '1982-08-04', 'Masculino', 'assets/img/avatars3.jpg'),
(2, 'Rodolfo', 'Ranni', 'Francia 3553', 'rodolfo_ranni22@yahoo.com.ar', '1133308615', 'Profesor de Ed.Fisica', '1983-07-17', 'Masculino', 'assets/img/avatar.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `fecha-hora` datetime NOT NULL,
  `mensaje` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `nombre`, `fecha-hora`, `mensaje`) VALUES
(1, 'Ramiro Benzacar', '2020-07-02 08:10:49', 'Hola me encuentro por aqui..'),
(2, 'Ramiro Benzacar', '2020-07-02 08:10:49', 'Hola me encuentro por aqui..');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE IF NOT EXISTS `pagos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pago` varchar(50) NOT NULL,
  `monto` float NOT NULL,
  `pendiente` float NOT NULL,
  `estudiante` varchar(50) NOT NULL,
  `clase` varchar(50) NOT NULL,
  `año` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE IF NOT EXISTS `periodo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `f_inicio` date NOT NULL,
  `f_cierre` date NOT NULL,
  `monto` float NOT NULL,
  `año` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representantes`
--

CREATE TABLE IF NOT EXISTS `representantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` int(20) NOT NULL,
  `ocupacion` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `representantes`
--

INSERT INTO `representantes` (`id`, `nombre`, `apellido`, `direccion`, `email`, `telefono`, `ocupacion`, `genero`) VALUES
(1, 'Ramiro', 'Benzacar', 'Emilio Lamarca 4959', 'ramiro.benzacar@hotmail.com', 1162944709, 'Director', 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

CREATE TABLE IF NOT EXISTS `salon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE IF NOT EXISTS `seccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `sector` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `año` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(250) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usuario`, `pass`, `fecha`) VALUES
(1, 'administrador', 'Racingyvino2617', '2019-07-02'),
(2, 'admin', 'admin', '2019-07-02');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
