-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2022 a las 04:38:54
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_acevedoariel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `id_consulta` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `motivo` varchar(100) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `texto_consulta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`id_consulta`, `nombre`, `motivo`, `correo`, `texto_consulta`) VALUES
(3, 'Leonardo', 'Consulta de pagos', 'leonardo123@hotmail.com', 'agregando comentario'),
(4, 'asd', 'hola', 'asd@hotmail.com', '123assad adasds'),
(5, 'alejandro', 'Ejemplo1', 'ariel@hotmail.com', 'agregando comentario en la seccion de consulta'),
(8, 'Ariel', 'Motivo1', 'ejemplo@hotmail.com', 'Dejando comentarios.'),
(9, 'karina', 'motivo2', 'karina@asd.com', 'dejando otro comentario'),
(11, 'adasdsad', 'asdasd', '123@asd.com', 'adsadasdasdasds');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ventas`
--

CREATE TABLE `detalle_ventas` (
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `detalle_cantidad` int(11) NOT NULL,
  `detalle_precio` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_ventas`
--

INSERT INTO `detalle_ventas` (`id_venta`, `id_producto`, `detalle_cantidad`, `detalle_precio`) VALUES
(48, 13, 1, '29453'),
(48, 14, 1, '4800'),
(48, 15, 1, '54405'),
(48, 16, 3, '42652'),
(49, 15, 3, '54405'),
(49, 17, 2, '43000'),
(50, 19, 2, '10645'),
(50, 18, 2, '14912'),
(51, 13, 1, '29453'),
(51, 17, 1, '43000'),
(51, 21, 1, '49105'),
(51, 18, 1, '14912'),
(52, 14, 3, '4800'),
(52, 12, 2, '34452'),
(52, 15, 1, '54405'),
(53, 18, 3, '14912'),
(54, 20, 1, '49785'),
(54, 21, 1, '49105'),
(54, 12, 1, '34452'),
(55, 16, 1, '42652'),
(56, 20, 2, '49785'),
(56, 19, 1, '10645'),
(56, 12, 1, '34452'),
(57, 13, 2, '29453'),
(58, 13, 2, '29453'),
(59, 13, 2, '29453'),
(60, 13, 2, '29453'),
(61, 13, 2, '29453'),
(61, 20, 1, '49785'),
(61, 15, 1, '54405'),
(62, 13, 1, '29453'),
(63, 14, 1, '4800');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `perfil_descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `perfil_descripcion`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `producto_nombre` varchar(200) NOT NULL,
  `producto_descripcion` varchar(300) NOT NULL,
  `producto_precio` decimal(10,0) NOT NULL,
  `producto_imagen` varchar(100) NOT NULL,
  `producto_stock` int(150) NOT NULL,
  `producto_categoria` int(11) NOT NULL,
  `producto_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `producto_nombre`, `producto_descripcion`, `producto_precio`, `producto_imagen`, `producto_stock`, `producto_categoria`, `producto_estado`) VALUES
(12, 'Takamine G-Series GD30CE-NAT', 'Es una guitarra de apariencia sencilla, ¡pero que esto no te engañe! Pues está compuesta por una cubierta de abeto macizo con sus laterales, parte posterior y cuello de caoba. Su diapasón está fabricado con palisandro e incluso su puente sin patas también está hecho de este material. ', '34452', '1654978731_55bdc7fbf8c5477231f7.jpg', 16, 4, 1),
(13, 'Newen de lenga blanca', 'Disfrutá con esta guitarra Newen de la conexión con la música. Con este instrumento descubrirás nuevos acordes, entonarás tus canciones y disfrutarás de la vida musical. Explorá, amplificá tu creatividad y desarrollá tu pasión.', '29453', '1655262499_c303431eb6be45512884.jpg', 7, 1, 1),
(14, 'SX EE Series EE3 les paul de aliso 2000 black', 'Cuenta con pastillas, tono independiente y controles de volumen para cada elemento, lo que produce distintos resultados. El punto fuerte en su sonido es ser distorsionado, denso, contundente, potente y redondo. Es ideal para el rock sureño, rock de los 70, blues, jazz, heavy metal y punk.', '4800', '1655736371_ebed9a47c9e4406f4ee9.jpg', 5, 1, 1),
(15, 'Epiphone SG Special', 'Esta guitarra SG es una variación de la Les Pauls que popularizó Angus Young de AC/DC. A diferencia de la Les Paul y Stratocaster, es bastante ligera de peso, con menos graves, pero muy dinámica y viva, lo que la hace perfecta para el blues y el rock.', '54405', '1654999491_f6ca0a4722791bc4be4e.jpg', 9, 1, 1),
(16, 'Epiphone Les Paul SL de álamo 2017', 'Esta Les Paul cuenta con pastillas, tono independiente y controles de volumen para cada elemento, lo que produce distintos resultados. El punto fuerte en su sonido es ser distorsionado, denso, contundente, potente y redondo.', '42652', '1654999553_2585b1b758e89efb539b.jpg', 10, 1, 1),
(17, 'Cort G Series G110 double-cutaway', 'Cort entrega los mejores instrumentos a personas apasionadas de todo el mundo. Trabaja bajo cuidadosos estándares de selección y pulido de madera y cada uno de los elementos que componen sus guitarras.', '43000', '1654999599_75e97c10214c2267621c.jpg', 5, 1, 1),
(18, 'Paco De Lucía Signature Marca Cordoba F7', 'Esta guitarra ofrece incrustaciones de posición lateral en el quinto, séptimo, noveno y duodécimo traste.', '14912', '1654999982_81d9f5c2f1c230385595.jpg', 20, 3, 1),
(19, 'Cordoba C5ce Guitarra Flamenca', 'Solid Top Cedar Canadiense / Fondo y Laterales Caoba Africana / Corte / Fishman', '10645', '1654999993_6f5af58c0c86202a496f.jpg', 30, 3, 1),
(20, 'Epiphone DR-100 para zurdos', 'Calidad que se hace notar Las cuerdas de metal se caracterizan por su bajo estiramiento y resistencia a la corrosión y abrasión. Son más duraderas, sólidas y generan un sonido brillante y claro.', '49785', '1655000307_c1fd337a759361c2de72.jpg', 9, 2, 1),
(21, 'Gracia 345 para diestros natural', 'La tapa de caoba te ofrece un sonido cálido y muy limpio, a la vez que resalta las frecuencias graves y medias. Tiene un peso estándar y un mayor grado de densidad, resistencia y elasticidad.', '49105', '1655000356_de72694939217439b517.jpg', 16, 2, 1),
(22, 'Cordoba Gk Studio', 'Solido Top Spruce Europeo / Fondo y Laterales Cypress ', '182126', '1655755322_8388b55f8a44db81534d.jpg', 5, 3, 1),
(23, 'Yamaha Cg172sf Con Cuerdas De Nylon', 'Por demanda popular, regresa una guitarra flamenca con cuerdas de nylon diseñada y construida por Yamaha Guitars. La guitarra flamenca con cuerdas de nylon CG172SF tiene una perspectiva fresca y características contemporáneas que brindan                         una calidad de sonido, rendimiento y j', '120000', '1655756697_fc4f550eb41a8521fc82.jpg', 5, 3, 1),
(24, 'Luthier Juan Dallaserra', 'Tapa de abeto alemán, fondo y aros de ciprés, mango de cedro, diapasón de ébano, puente de wengue, clavijas torneadas de guayacán. Lustrada completamente a goma laca a muñeca.', '270000', '1655756777_da5887088af057b89e26.jpg', 3, 3, 1),
(25, 'Premium Clavija Rabaza. Modelo 2005', 'Posee clavijas de madera de Ébano con incrustaciones de Nácar. Fondo y aros en Ciprés seleccionado especial.Tapa Pino Abeto Cedro Rojo. Barnizada con goma laca a la muñequilla.', '190000', '1655756949_8f3a17d5fe44fa177a0e.jpg', 6, 3, 1),
(26, 'Cort Standard AD810 para diestros black satin', 'Un modelo para cada guitarrista La tapa de abeto genera un tono brillante y claro, incluso en los registros más agudos. Las cuerdas de metal se caracterizan por su bajo estiramiento y resistencia a la corrosión y abrasión. Son más duraderas, sólidas y generan un sonido brillante y claro.', '35350', '1655757270_0462eac8be425018169f.jpg', 4, 2, 1),
(27, 'Parquer Master GAC209TBBLEQ4', 'Para diestros azul marina laqueado. Un modelo para cada guitarrista La tapa de tilo tiene un peso y una densidad que te ofrecen un sonido con más cuerpo. Esta madera presenta un buen equilibrio de graves, por lo que suena con más peso rítmico y un tono suave.', '36900', '1655757349_7be53f54a362f9027341.jpg', 5, 2, 1),
(28, 'Cort Standard AF510E Black sting', 'Un modelo para cada guitarrista La tapa de abeto genera un tono brillante y claro, incluso en los registros más agudos. Calidad que se hace notar Las cuerdas de metal se caracterizan por su bajo estiramiento y resistencia a la corrosión                         y abrasión. Son más duraderas, sólidas ', '44930', '1655757410_9496e0f938f7a040aadf.jpg', 20, 2, 1),
(29, 'Ibanez AEG12IINT', 'El cuerpo de esta guitarra electroacústica es completamente hecho de caoba, además su profundidad es estrecha haciendo que sea más fácil de transportar y tocar. Por otra parte, a pesar de ser una guitarra electroacústica atractiva, posee bajo nivel de proyección. Esto sin embargo, resulta ventajoso ', '55325', '1655757778_bc718d475f551ed1c834.jpg', 9, 4, 1),
(30, 'Ibanez AEG10NIIBK', 'Su sonido amplificado es bastante fiable, la manejabilidad es excelente y sin mencionar su increíble aspecto delgado. Es muy divertida y recibe muchos comentarios positivos de clientes satisfechos.', '47850', '1655758109_188419b595d2583dc65a.jpg', 6, 4, 1),
(31, 'Gretsch G5024E Rancher', 'Adoptando un llamativo diseño de la vieja escuela, muchos catalogan esta guitarra electroacústica como un instrumento divertido para practicar y tocar. La calidad de su construcción es indiscutible así como también la propiedad de su sonido amplificado y acústico.', '105000', '1655758182_adf3537d306a6c99447c.jpg', 10, 4, 1),
(32, 'Takamine EF341SC', 'Esta guitarra electroacústica profesional presenta una forma de cuerpo de dreadnought con un corte profundo que le brinda un mayor rendimiento. La parte superior está fabricada de cedro sólido, mientras que la parte posterior y los lados están hechos de arce laminado. Cubierta totalmente con un acab', '120200', '1655758319_e4bd9a609d905abb56df.jpg', 2, 4, 1),
(33, 'Fender Tim Armstrong Hellcat', 'Guitarra excepcional para quienes les gusta lo atractivo y ser el centro de atención a la hora de tocar en un concierto. Es el modelo de firma para Tim Armstrong de los punk rockers rancid. Se trata de una guitarra electroacústica que adopta un aspecto agresivo, con una tapa de caoba sólida oscura y', '63400', '1655758655_c1fcdd471847e0e7a3a3.jpg', 12, 4, 1),
(34, 'Takamine Pro Series EF508KC NEX', 'Considerado como el mejor modelo de guitarra electroacústica lanzado por Takamine en el Noviembre del 2016. Su cuerpo está fabricado totalmente de koa (una madera bastante costosa originaria de Hawai) y es del tipo NEX. Posee un acabado brillante natural con una apariencia rústica pero ligera y llam', '150698', '1655758762_e09a6a02a0a2244da442.jpg', 1, 4, 1),
(35, 'Epiphone Les Paul Special VE', 'Epiphone fabrica instrumentos para todos los estilos de música popular, con espíritu pionero y de invención. El valor de sus productos resalta por su calidad e innovación.', '55200', '1655758901_ea71e394321aa1c5298c.jpg', 4, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_categoria`
--

CREATE TABLE `producto_categoria` (
  `categoria_id` int(100) NOT NULL,
  `categoria_descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto_categoria`
--

INSERT INTO `producto_categoria` (`categoria_id`, `categoria_descripcion`) VALUES
(1, 'guitarra electrica'),
(2, 'guitarra acustica'),
(3, 'guitarra flamenca'),
(4, 'guitarra electroacustica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `dni` int(11) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `ciudad` varchar(200) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` int(11) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `perfil_id` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `dni`, `pais`, `ciudad`, `direccion`, `telefono`, `mail`, `password`, `perfil_id`, `estado`) VALUES
(46, 'Ariel', 'Acevedo', 37393962, 'Argentina', 'Corrientes', '183 viviendas, barrio nuevo', 2147483647, 'arielacevedo@hotmail.com', '$2y$10$AcPSDpQteMzeb6HMNTNBVevfuC0bbXl87itMR0dWsPCcJUf5jXvsO', 1, 1),
(47, 'ale', 'Perez', 20541589, 'Argentina', 'Corrientes', '105 viviendas, sector D, casa 30, barrio las mil', 2147483647, 'ale@hotmail.com', '$2y$10$eeqsu2dkG4kcEFu29VqBwuRRpW1WyvDon2qbDbigydnjkqppsK.mS', 2, 1),
(48, 'Maria', 'Domiguez', 3548521, 'Argentina', 'Misiones', '190 viviendas, sector 5, casa D', 377256984, 'maria1@hotmail.com', '$2y$10$tzsOoRWwasslN9cPEvlPquR0HXFx7yjPBZsjYVP5Ri4nhCAAqx5/a', 2, 1),
(49, 'Verocina', 'Mendez', 12312312, 'Argentina', 'Formosa', '150 viviendas mz 45 cs 90', 2147483647, 'vero@hotmail.com', '$2y$10$VrYaIdvSL/AIHS9gUjqM9eupSCvRarThdErdX2wDeDKCK0ySHdixq', 2, 1),
(50, 'Tomas', 'Gomez', 36854172, 'Argentina', 'Chaco - Resistencia', '190 viviendas, sector 9, casa 4, manzana 104', 37845154, 'gomez@hotmail.com', '$2y$10$aDLqOh0lGOe28RwoeMRVmOG5kH4FW3m7NQ5aanIi8RmaGVDWYUL12', 2, 1),
(51, 'Alfredo', 'Aguirre', 213123123, 'asdasdasd', 'asdasdasd', 'asdsadsad', 234234324, 'aguirre@hotmail.com', '$2y$10$ETQXULdar0rR1e.8ggfHHeSaU3.ol.KfWon5F7h2jFXH55zHXgbCy', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `venta_id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `venta_fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`venta_id`, `id_cliente`, `venta_fecha`) VALUES
(48, 47, '2022-06-19'),
(49, 47, '2022-06-19'),
(50, 47, '2022-06-19'),
(51, 50, '2022-06-19'),
(52, 50, '2022-06-19'),
(53, 48, '2022-06-19'),
(54, 48, '2022-06-19'),
(55, 49, '2022-06-19'),
(56, 49, '2022-06-19'),
(57, 48, '2022-06-20'),
(58, 48, '2022-06-20'),
(59, 48, '2022-06-20'),
(60, 48, '2022-06-20'),
(61, 48, '2022-06-20'),
(62, 48, '2022-06-20'),
(63, 48, '2022-06-20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id_consulta`);

--
-- Indices de la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  ADD KEY `id_venta` (`id_venta`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `producto_categoria` (`producto_categoria`);

--
-- Indices de la tabla `producto_categoria`
--
ALTER TABLE `producto_categoria`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `perfil_id` (`perfil_id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`venta_id`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `venta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  ADD CONSTRAINT `detalle_ventas_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`venta_id`),
  ADD CONSTRAINT `detalle_ventas_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`producto_categoria`) REFERENCES `producto_categoria` (`categoria_id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`perfil_id`) REFERENCES `perfil` (`id_perfil`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
