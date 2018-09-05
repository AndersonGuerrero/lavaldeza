-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 05-09-2018 a las 13:21:23
-- Versión del servidor: 5.6.39-83.1
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lavaldez_DB`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amenidades`
--

CREATE TABLE `amenidades` (
  `id` int(11) NOT NULL,
  `imagen` varchar(500) DEFAULT NULL,
  `categoria` varchar(300) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `amenidades`
--

INSERT INTO `amenidades` (`id`, `imagen`, `categoria`, `created_at`) VALUES
(17, 'amenidades-parque-2.jpg', 'Parque de juegos', '2018-09-03 06:39:16'),
(18, 'amenidades-parque-22-min.jpg', 'Parque de juegos', '2018-09-03 06:46:36'),
(19, 'amenidades-areas-verdes-1.jpg', 'Areas verdes', '2018-09-03 06:48:02'),
(20, 'amenidades-areas-verdes-3.jpg', 'Areas verdes', '2018-09-03 06:48:59'),
(21, 'amenidades-areas-verdes-2.jpg', 'Areas verdes', '2018-09-03 06:49:22'),
(22, 'amenidades-calles-concreto.jpg', 'Calles de concreto', '2018-09-03 06:50:20'),
(23, 'amenidades-BOULEVARD-1.jpg', 'Amplio boulevard', '2018-09-03 06:51:05'),
(24, 'amenidades-BOULEVARD-2.jpg', 'Amplio boulevard', '2018-09-03 06:51:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avances`
--

CREATE TABLE `avances` (
  `id` int(11) NOT NULL,
  `imagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `avances`
--

INSERT INTO `avances` (`id`, `imagen`) VALUES
(2, 'file2-1.jpeg'),
(3, 'file3-1.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `descripcion` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `img_inicio` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `img_noticia` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `texto` varchar(10000) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `blogs`
--

INSERT INTO `blogs` (`id`, `titulo`, `descripcion`, `created_at`, `img_inicio`, `img_noticia`, `texto`) VALUES
(23, 'EMAS', 'Hace algÃºn tiempo se realizÃ³ una actividad con la empresa EMAS, que tenÃ­a como objetivo principal, sensibilizar en la\r\n                                    importancia del manejo... ', '2018-09-03 09:55:42', '20180225_103601-min.jpg', '20180225_103601-min.jpg', ' La Valdeza, llevÃ³ a cabo su feria de casas en el Proyecto La Valdeza, ubicado en la Provincia de PanamÃ¡ Oeste, permitiendo a nuestros clientes visitar y conocer nuestros variados modelos de casas, recorrer el Ã¡rea residencial y tramitar sus documentos en el sitio con los bancos que participaron durante los dÃ­as 29 y 30 de abril.'),
(24, 'Feria de Vivienda en La Valdeza', 'No te pierdas este 18 y 19 de Agosto nuestra increible feria de vivienda! Ven y conoce nuestros 4 modelos , separa tu casa con solo $ 25.00\r\n', '2018-09-03 09:57:45', 'feria-19.jpeg', 'feria-19.jpeg', ' La Valdeza participÃ³ de Expovivienda PanamÃ¡, la mayor feria inmobiliaria del paÃ­s organizada del 20 al 23 de abril del 2017 por la CÃ¡mara PanameÃ±a de la ConstrucciÃ³n (Capac), y que contÃ³ con participaciÃ³n de prestigiosas empresas del sector y la presencia de destacas autoridades de la industria. \r\n\r\nA la feria asistieron cientos de panameÃ±os que buscan una opciÃ³n de viviendas propias presentadas por las promotoras participantes, permitiendo presentar nuestro proyecto de interÃ©s social La Valdeza, ubicado en La Chorrera, Provincia de la PanamÃ¡ Oeste.'),
(25, 'FELICIDADES A NUESTRO COMPRADOR NÂ° 1000', 'Porque nuestros propietarios son importantes para nosotros, esta vez obsequiamos completamente gratis a nuestro comprador NÂ° 1000 una nevera nueva! Gracias por confiar en nuestro proyecto!\r\n', '2018-09-03 09:59:04', 'comprador-1000.jpeg', 'comprador-1000.jpeg', 'Del 25 al 29 de enero de 2017, Promotora La Valdeza, participÃ³ exitosamente en la feria Expo Inmobiliaria 2017 organizada por la AsociaciÃ³n PanameÃ±a de Corredores y Promotores de Bienes RaÃ­ces (ACOBIR). \r\n\r\nLa actividad, se llevÃ³ a cabo en el Centro de Convenciones Atlapa de Ciudad de PanamÃ¡ y permitiÃ³ a la promotora presentar su proyecto de interÃ©s social La Valdeza que estÃ¡ desarrollando en La Chorrera, Provincia de PanamÃ¡ Oeste.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `web` varchar(300) NOT NULL,
  `correo` varchar(300) NOT NULL,
  `facebook` varchar(300) NOT NULL,
  `youtube` varchar(300) NOT NULL,
  `instagram` varchar(300) NOT NULL,
  `whatsapp` varchar(500) NOT NULL,
  `map` varchar(500) NOT NULL,
  `waze` varchar(500) NOT NULL,
  `telefono1` varchar(30) NOT NULL,
  `telefono2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `web`, `correo`, `facebook`, `youtube`, `instagram`, `whatsapp`, `map`, `waze`, `telefono1`, `telefono2`) VALUES
(1, 'www.lavaldeza.com', 'info@grupoti.com', 'https://www.facebook.com/promotoralavaldeza/', 'https://www.youtube.com/channel/UCpbsDzJk_xWK1CUeka-A3bQ', 'https://www.instagram.com/promotoralavaldeza/', '50763745392', 'https://goo.gl/maps/3map5TtvcCm', 'https://www.waze.com/ul?ll=8.55521989%2C-80.71105957&navigate=yes&zoom=9', '388-6630', '6374-5392');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE `planes` (
  `id` int(11) NOT NULL,
  `plan1_titulo` varchar(300) NOT NULL,
  `plan1_texto` text NOT NULL,
  `plan2_titulo` varchar(300) NOT NULL,
  `plan2_texto` text NOT NULL,
  `plan3_titulo` varchar(300) NOT NULL,
  `plan3_texto` text NOT NULL,
  `valor1` varchar(100) NOT NULL,
  `valor2` varchar(100) NOT NULL,
  `valor3` varchar(100) NOT NULL,
  `valor4` varchar(100) NOT NULL,
  `por1` varchar(100) NOT NULL,
  `por2` varchar(100) NOT NULL,
  `por3` varchar(100) NOT NULL,
  `por4` varchar(100) NOT NULL,
  `extra1` varchar(500) DEFAULT NULL,
  `extra2` varchar(500) DEFAULT NULL,
  `extra3` varchar(500) DEFAULT NULL,
  `extra4` varchar(500) DEFAULT NULL,
  `incluye1` varchar(500) NOT NULL,
  `incluye2` varchar(500) NOT NULL,
  `incluye3` varchar(300) NOT NULL,
  `incluye4` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `planes`
--

INSERT INTO `planes` (`id`, `plan1_titulo`, `plan1_texto`, `plan2_titulo`, `plan2_texto`, `plan3_titulo`, `plan3_texto`, `valor1`, `valor2`, `valor3`, `valor4`, `por1`, `por2`, `por3`, `por4`, `extra1`, `extra2`, `extra3`, `extra4`, `incluye1`, `incluye2`, `incluye3`, `incluye4`) VALUES
(1, 'RENUEVATE <br> (back to basic)', 'Este es el inicio de tu nuevo estilo de vida.\r\nSi tu objetivo es la salud, limpiar tu\r\ncuerpo, desinflamarte, eliminar liquido\r\nretenido, mejorar la apariencia y\r\n textura de tu piel, aprender a comer\r\ny reconocer el verdadero sabor de lo\r\nnatural este es el plan en donde\r\naprenderÃ¡s a conocer mas tu cuerpo\r\ny el valor nutricional de los alimentos\r\n            ', 'BODYSHAPE <br> (construye tu cuerpo deseado)', '            Si tu objetivo es crecer masa muscular,\r\n            mejorar tu figura, tonificar y definir\r\n            mÃºsculos este es el plan.\r\n            Para lograr el resultado deseado es\r\n            necesario trabajar con un menu de\r\n            alimentaciÃ³n y suplementos enfocados\r\n            al crecimiento o tonificaciÃ³n de la\r\n            masa muscular.\r\n            ', 'ANTIAGING <br> (efecto mela)', 'Mejora la calidad de vida de tu\r\n              organismo y revela la belleza que hay\r\n              dentro de ti. AlimentaciÃ³n enfocada a\r\n              retrasar el proceso de envejecimiento\r\n              y prolongar los anos de juventud y no\r\n              de vejez. Mantente siempre joven joven\r\n              y vital. <br>\r\n\r\n              Puede utilizar este plan como programa\r\n              de mantenimiento.', '$75', '$60', '$55', '$50', '1 Mes', '2 Meses de contado', '3 Meses de contado', 'Rutinas de Entrenamiento', NULL, '120,00 Total (Ahorras 30,00) ', '165,00 Total (Ahorras 60,00) ', 'Tus planes de entrenamientos quedan a medio precio (50%-) por la compra de tu plan de alimentaciÃ³n. ', 'Plan de alimentacion Plan de suplementacion Chequeo Semanal', 'Plan de alimentacion Plan de suplementacion Chequeo Semanal', 'Plan de alimentacion Plan de suplementacion Chequeo Semanal', 'Rutinas de Cardio  Rutina de pesos y ejercicios  funcionales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id` int(11) NOT NULL,
  `texto` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id`, `texto`, `imagen`) VALUES
(1, '      <p style=\"word-wrap: break-word; margin-bottom: 10px; padding: 0px; font-family: Raleway; line-height: 30px;\">La Valdeza es un proyecto de 3000 viviendas de interÃ©s social de alta calidad con un diseÃ±o seguro, que garantiza la mayor funcionalidad a las familias al contar con una estructura y distribuciÃ³n adaptada a sus necesidades.</p><p style=\"word-wrap: break-word; margin-bottom: 10px; padding: 0px; font-family: Raleway; line-height: 30px;\">Todas nuestras viviendas buscan brindar a las familias calidad de vida, por eso optimizamos espacio, maximizamos la luz natural, incluimos verjas y brindamos los mejores acabados.</p><p style=\"word-wrap: break-word; margin-bottom: 10px; padding: 0px; font-family: Raleway; line-height: 30px;\">En La Valdeza sabemos que vivir mejor sÃ­ es posible, razÃ³n por la cual el proyecto incluye excelentes condiciones urbanÃ­sticas y cuenta con calles amplias, generosas Ã¡reas verdes, zonas de recreaciÃ³n y esparcimiento con caminerÃ­as y parques equipados.</p><ul style=\"word-wrap: break-word; list-style: none; margin-right: 0px; margin-left: 0px; padding: 0px 0px 10px; font-family: Raleway;\"><li style=\"word-wrap: break-word; padding: 5px 0px; line-height: 16px;\"><span class=\"icon icon-checkmark\" style=\"word-wrap: break-word; font-family: icomoon; line-height: 1; color: rgb(46, 86, 41); padding-right: 10px;\">&nbsp;</span>EstÃ¡ conectado al IDAAN<img class=\"img-IDAAN\" src=\"http://127.0.0.1/lavaldeza/img/IDAAN.png\" style=\"word-wrap: break-word; max-width: 100%; vertical-align: bottom; margin: -10px 0px 0px 95px; width: 50px; position: absolute; height: auto !important;\"></li><li style=\"word-wrap: break-word; padding: 5px 0px; line-height: 16px;\"><span class=\"icon icon-checkmark\" style=\"word-wrap: break-word; font-family: icomoon; line-height: 1; color: rgb(46, 86, 41); padding-right: 10px;\">&nbsp;</span>Transporte dentro de la urbanizaciÃ³n</li><li style=\"word-wrap: break-word; padding: 5px 0px; line-height: 16px;\"><span class=\"icon icon-checkmark\" style=\"word-wrap: break-word; font-family: icomoon; line-height: 1; color: rgb(46, 86, 41); padding-right: 10px;\">&nbsp;</span>Modernas plantas de tratamiento</li><li style=\"word-wrap: break-word; padding: 5px 0px; line-height: 16px;\"><span class=\"icon icon-checkmark\" style=\"word-wrap: break-word; font-family: icomoon; line-height: 1; color: rgb(46, 86, 41); padding-right: 10px;\">&nbsp;</span>A 5 minutos de costa verde</li><li style=\"word-wrap: break-word; padding: 5px 0px; line-height: 16px;\"><span class=\"icon icon-checkmark\" style=\"word-wrap: break-word; font-family: icomoon; line-height: 1; color: rgb(46, 86, 41); padding-right: 10px;\">&nbsp;</span>Amplias calles de concreto</li><li style=\"word-wrap: break-word; padding: 5px 0px; line-height: 16px;\"><span class=\"icon icon-checkmark\" style=\"word-wrap: break-word; font-family: icomoon; line-height: 1; color: rgb(46, 86, 41); padding-right: 10px;\">&nbsp;</span>A 3 minutos de la interamericana</li><li style=\"word-wrap: break-word; padding: 5px 0px; line-height: 16px;\"><span class=\"icon icon-checkmark\" style=\"word-wrap: break-word; font-family: icomoon; line-height: 1; color: rgb(46, 86, 41); padding-right: 10px;\">&nbsp;</span>Cerca de todo</li><li style=\"word-wrap: break-word; padding: 5px 0px; line-height: 16px;\"><span class=\"icon icon-checkmark\" style=\"word-wrap: break-word; font-family: icomoon; line-height: 1; color: rgb(46, 86, 41); padding-right: 10px;\">&nbsp;</span>Excelentes acabados</li></ul>      ', 'la-valdeza-mapa-editado-min.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quienessomos`
--

CREATE TABLE `quienessomos` (
  `id` int(11) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `quienessomos`
--

INSERT INTO `quienessomos` (`id`, `texto`) VALUES
(1, '<p style=\"word-wrap: break-word; margin-bottom: 10px; padding: 0px; font-family: Raleway; line-height: 30px;\">Somos un grupo empresarial con mÃ¡s de 50 aÃ±os de experiencia en construcciÃ³n de proyectos de vivienda de interÃ©s social. Nuestro norte es ofrecer a las familias soluciones habitacionales con altos estÃ¡ndares de calidad, funcionalidad y durabilidad, con el fin de mejorar su calidad de vida.</p><p style=\"word-wrap: break-word; margin-bottom: 10px; padding: 0px; font-family: Raleway; line-height: 30px;\">Nuestra visiÃ³n es de largo plazo, por eso trabajamos de la mano de la comunidad y de las autoridades para promover el desarrollo sostenible de las zonas donde operamos, y nuestro equipo estÃ¡ abocado a ofrecer un servicio de excelencia en todo momento a nuestros clientes..</p><p style=\"word-wrap: break-word; margin-bottom: 10px; padding: 0px; font-family: Raleway; line-height: 30px;\">En nuestros 10 aÃ±os de trayectoria en PanamÃ¡ hemos desarrollado proyectos que se traducen en mÃ¡s de 1000 viviendas entregadas y por ende mÃ¡s de 5000 personas que hoy cuentan con un sueÃ±o hecho realidad.</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccionmas`
--

CREATE TABLE `seccionmas` (
  `id` int(11) NOT NULL,
  `img_popup_1` varchar(500) NOT NULL,
  `img_popup_2` varchar(500) NOT NULL,
  `img_popup_3` varchar(500) NOT NULL,
  `img_popup_4` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seccionmas`
--

INSERT INTO `seccionmas` (`id`, `img_popup_1`, `img_popup_2`, `img_popup_3`, `img_popup_4`) VALUES
(1, 'La Valdeza Requisitos casas.jpg', 'bono-mivi.jpg', 'Collage Propietarios felices_completo.jpg', 'La Valdeza Post venta.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `imagen` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `imagen`) VALUES
(8, 'Slide cabecera 1-edit-min.jpg'),
(9, 'Slide cabecera 2-min.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `link` varchar(500) NOT NULL,
  `imagen` varchar(500) DEFAULT NULL,
  `principal` tinyint(1) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `titulo`, `link`, `imagen`, `principal`, `created_at`) VALUES
(1, 'Rutina GAP jelou', 'https://www.youtube.com/embed/VreKuQJxhEQ', 'video1.jpg', 1, '2018-03-06 00:00:00'),
(2, 'Power Abs desde JelouTv', 'https://www.youtube.com/embed/f24GLQMCMv4', 'video2.jpg', 0, '2018-03-07 02:30:35'),
(3, 'Proyecto Bumbumnanuca', 'https://www.youtube.com/embed/DwlTd7cFGEE', 'video3.jpg', 0, '2018-03-07 02:31:38'),
(4, 'Suplementos Efecto Mela', 'https://www.youtube.com/embed/GGI4gzPoe5Q', 'video4.jpg', 0, '2018-03-07 02:43:57');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `amenidades`
--
ALTER TABLE `amenidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `avances`
--
ALTER TABLE `avances`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `planes`
--
ALTER TABLE `planes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `quienessomos`
--
ALTER TABLE `quienessomos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seccionmas`
--
ALTER TABLE `seccionmas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `amenidades`
--
ALTER TABLE `amenidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `avances`
--
ALTER TABLE `avances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `planes`
--
ALTER TABLE `planes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `quienessomos`
--
ALTER TABLE `quienessomos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `seccionmas`
--
ALTER TABLE `seccionmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
